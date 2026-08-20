<?php
header("Content-Type: application/json");

require __DIR__ . '/../assets/vendor/autoload.php';
$mailConfig = require __DIR__ . '/../config/mail-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* =========================
   RECAPTCHA SECRET KEY
========================= */
define('RECAPTCHA_SECRET', '6LcguIEsAAAAADICF-ZgBtPVKkhrKFpJTRfRkhIN');

/* =========================
   ALLOW POST ONLY
========================= */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "status"  => "error",
        "message" => "Invalid request method"
    ]);
    exit;
}

/* =========================
   HONEYPOT CHECK
========================= */
if (!empty($_POST['company'])) {
    echo json_encode(["status" => "success"]);
    exit;
}

/* =========================
   RECAPTCHA VERIFICATION
========================= */
$recaptchaToken = trim($_POST['g-recaptcha-response'] ?? '');

if (empty($recaptchaToken)) {
    echo json_encode([
        "status"  => "error",
        "message" => "Please complete the reCAPTCHA verification.",
        "errors"  => ["reCAPTCHA token missing"]
    ]);
    exit;
}

$recaptchaVerify = file_get_contents(
    'https://www.google.com/recaptcha/api/siteverify?secret=' .
    urlencode(RECAPTCHA_SECRET) .
    '&response=' . urlencode($recaptchaToken) .
    '&remoteip=' . urlencode($_SERVER['REMOTE_ADDR'] ?? '')
);

$recaptchaResult = json_decode($recaptchaVerify, true);

if (empty($recaptchaResult['success'])) {
    echo json_encode([
        "status"  => "error",
        "message" => "reCAPTCHA verification failed. Please try again.",
        "errors"  => ["reCAPTCHA failed"]
    ]);
    exit;
}

/* =========================
   COLLECT & SANITIZE
========================= */
$name          = trim($_POST['name'] ?? '');
$email         = trim($_POST['email'] ?? '');
$phone         = trim($_POST['phone'] ?? '');
$service       = trim($_POST['service'] ?? '');
$property_type = trim($_POST['property_type'] ?? '');
$address       = trim($_POST['address'] ?? '');

$name    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars($phone,   ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');

/* =========================
   VALIDATION
========================= */
$errors = [];

if (strlen($name) < 2) {
    $errors[] = "Invalid name";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address";
}

$phone = preg_replace('/[^0-9+]/', '', $phone);
if (strpos($phone, '+61') === 0) {
    $phone = '0' . substr($phone, 3);
}
if (preg_match('/^4\d{8}$/', $phone)) {
    $phone = '0' . $phone;
}
if (!preg_match('/^04\d{8}$/', $phone)) {
    $errors[] = "Invalid Australian mobile number";
}

if ($service === '') {
    $errors[] = "Service not selected";
}

if ($property_type === '') {
    $errors[] = "Property type not selected";
}

if (strlen($address) < 5) {
    $errors[] = "Invalid address";
}

if (!empty($errors)) {
    echo json_encode([
        "status"  => "error",
        "message" => "Validation failed",
        "errors"  => $errors
    ]);
    exit;
}

/* =========================
   SEND EMAIL
========================= */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $mailConfig['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $mailConfig['username'];
    $mail->Password   = $mailConfig['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $mailConfig['port'];

    $mail->setFrom($mailConfig['username'], 'Verispect Website');
    $mail->addAddress($mailConfig['username']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $mail->Subject = "New Pest Control Enquiry | Verispect";

    $mail->Body =
        "New enquiry received:\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Service: " . strtoupper($service) . "\n" .
        "Property Type: " . strtoupper($property_type) . "\n\n" .
        "Address:\n$address\n";

    $mail->send();

    echo json_encode([
        "status"  => "success",
        "message" => "Enquiry sent successfully"
    ]);
    exit;

} catch (Exception $e) {
    error_log("Mailer Error: " . $mail->ErrorInfo);
    http_response_code(500);
    echo json_encode([
        "status"  => "error",
        "message" => "Unable to send enquiry. Please try again later."
    ]);
    exit;
}
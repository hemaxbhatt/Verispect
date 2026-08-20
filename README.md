# Verispect Pest Control Website

Verispect is a professional, licensed pest control service provider for Australian homes and businesses, specializing in Western Sydney. This repository contains the front-end code, contact form templates, and server-side logic for the [verispect.com](https://verispect.com) website.

---

## 🚀 Features

- **Responsive Design:** Crafted using modern HTML5, CSS3, and Bootstrap 5 for compatibility across desktop, tablet, and mobile devices.
- **Service Listings:** Detailed overviews of primary pest control offerings:
  - General Pest Control (cockroaches, ants, wasps, etc.)
  - Termite Inspections & Barriers
  - Rodent Control (rats and mice)
  - Bed Bug Treatments
  - Spider Extermination
- **Interactive Forms:** Dynamic quote and contact forms using AJAX and client/server validation.
- **Security Integrations:**
  - Google reCAPTCHA v2 protection against spam submissions.
  - Honeypot spam filtering.
- **Email Delivery:** Integrates PHPMailer for reliable SMTP delivery (e.g., via Gmail SMTP).

---

## 🛠️ Tech Stack & Dependencies

- **Back-end:** PHP (>= 7.4)
- **Front-end:** HTML5, CSS3, JavaScript, Bootstrap v5.x
- **Libraries & Plugins:**
  - [PHPMailer](https://github.com/PHPMailer/PHPMailer) (Loaded via Composer autoload)
  - [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/)
  - [GLightbox](https://biati-digital.github.io/glightbox/)
  - [Swiper](https://swiperjs.com/)
  - [intl-tel-input](https://github.com/jackocnr/intl-tel-input) (International telephone input formatting)

---

## 📂 Project Structure

```text
├── assets/                     # Public assets
│   ├── css/                    # Custom stylesheets (main.css)
│   ├── img/                    # Project images, icons, and testimonials
│   ├── js/                     # Client-side scripts and validations
│   └── vendor/                 # Vendor libraries (Bootstrap, AOS, PHPMailer Composer packages)
├── config/
│   └── mail-config.php         # SMTP credentials & mail configurations
├── forms/
│   └── contact.php             # PHP contact form submit & email validation script
├── includes/
│   ├── navbar.php              # Global navigation bar header template
│   └── footer.php              # Global footer template
├── about.php                   # "About Us" and company core values page
├── contact.php                 # Dedicated Contact and Quote request page
├── index.php                   # Homepage with hero slider, features, and quick quote form
├── reviews.php                 # Customer testimonials page
├── services.php                # Detailed services breakdown page
```

---

## ⚙️ Configuration

### Email SMTP Setup
Form submissions are routed using PHPMailer. To configure your SMTP server details, update the configuration file in:
`config/mail-config.php`

```php
<?php
return [
    'host'     => 'smtp.yourmailprovider.com',
    'username' => 'your-email@domain.com',
    'password' => 'your-app-password',
    'port'     => 587 // or 465 for SSL/TLS
];
```

### Google reCAPTCHA Setup
To protect the form submissions, the site uses Google reCAPTCHA v2.
- Update your public site key in the form templates (`index.php`, `services.php`, etc.):
  ```html
  <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
  ```
- Update the secret key in the PHP backend (`forms/contact.php`):
  ```php
  define('RECAPTCHA_SECRET', 'YOUR_RECAPTCHA_SECRET_KEY');
  ```

---

## 💻 Local Development Setup

To host the site locally using tools like **Wampserver**, **XAMPP**, or **MAMP**:

1. Clone or download this repository to your local web server root directory (e.g. `C:\wamp64\www\verispect`).
2. Make sure PHP (version 7.4 or higher) is installed and enabled.
3. Configure your SMTP settings in `config/mail-config.php` to receive form submissions.
4. Launch your local server.
5. Open your browser and navigate to `http://localhost/verispect`.

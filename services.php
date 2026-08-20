<?php
$currentPage = 'services';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services | Verispect</title>
  <meta name="description" content="Professional Pest Control Services">

  <link href="assets/img/favicon.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* --- CUSTOM STYLES FOR CLIENT DESIGN MATCH --- */

    :root {
      --verispect-red: #e03a3c;
      --verispect-dark: #374253;
      /* Dark slate blue from client image */
    }

    /* 1. HERO SECTION (Matches the dark blue banner) */
    .service-hero {
      background-color: var(--verispect-dark);
      color: #fff;
      padding: 60px 0;
      position: relative;
      overflow: hidden;
    }

    .service-hero h1 {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    .service-hero p.lead {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .hero-btn-red {
      background-color: var(--verispect-red);
      color: #fff;
      padding: 12px 30px;
      border-radius: 5px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
      display: inline-block;
      margin-right: 10px;
    }

    .hero-btn-red:hover {
      background-color: #c92a2c;
      color: #fff;
    }

    .hero-btn-outline {
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      padding: 10px 25px;
      border-radius: 5px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
      display: inline-block;
    }

    .hero-btn-outline:hover {
      border-color: #fff;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
    }

    /* The "Why Choose" Box in Hero */
    .why-choose-box {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 8px;
      padding: 25px;
      backdrop-filter: blur(5px);
    }

    .why-choose-box h5 {
      font-weight: 700;
      margin-bottom: 15px;
      color: #fff;
    }

    .why-choose-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .why-choose-box li {
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      font-size: 0.95rem;
    }

    .why-choose-box li::before {
      content: "•";
      color: #fff;
      font-weight: bold;
      margin-right: 10px;
    }

    /* 2. MAIN LAYOUT & CARDS */
    .content-section {
      padding: 60px 0;
      background-color: #f6f7f9;
    }

    .service-card-horizontal {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
      margin-bottom: 30px;
      overflow: hidden;
      display: flex;
      flex-direction: row;
      /* Side by side */
      min-height: 280px;
      transition: transform 0.3s ease;
    }

    .service-card-horizontal:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    .card-content {
      padding: 30px;
      flex: 1;
      /* Takes up remaining space */
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .card-content h3 {
      color: #333;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .card-content p {
      color: #666;
      margin-bottom: 15px;
    }

    .card-bullets {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .card-bullets li {
      position: relative;
      padding-left: 25px;
      margin-bottom: 8px;
      color: #444;
      font-size: 0.95rem;
    }

    .card-bullets li::before {
      content: "\F26A";
      /* Bootstrap Icons Check circle */
      font-family: "bootstrap-icons";
      position: absolute;
      left: 0;
      top: 2px;
      color: var(--verispect-red);
    }

    /* The Image on the Right */
    .card-image-right {
      width: 35%;
      /* Fixed width for image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100%;
      background-color: #e9ecef;
      /* Fallback color */
    }

    /* 3. SIDEBAR STYLES */
    .sidebar-panel {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
      overflow: hidden;
    }

    .sidebar-header-red {
      background-color: #cb2027;
      /* Slightly darker red for header */
      color: #fff;
      padding: 20px;
      font-weight: 700;
      font-size: 1.2rem;
      text-align: center;
    }

    .sidebar-body {
      padding: 25px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control,
    .form-select {
      border: 1px solid #ddd;
      padding: 12px;
      border-radius: 6px;
      font-size: 0.95rem;
    }

    .form-control:focus {
      border-color: var(--verispect-red);
      box-shadow: none;
    }

    .btn-quote-submit {
      width: 100%;
      background-color: #1a2533;
      /* Dark blue button */
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-quote-submit:hover {
      background-color: var(--verispect-red);
    }

    /* Testimonial */
    .stars {
      color: #ffc107;
      margin-bottom: 10px;
      letter-spacing: 2px;
    }

    .testimonial-text {
      font-style: italic;
      font-size: 0.95rem;
      color: #555;
    }

    .testimonial-author {
      font-weight: 700;
      margin-top: 10px;
      display: block;
      color: #333;
    }

    /* Service Areas Chips */
    .area-chip {
      display: inline-block;
      background: #f1f3f5;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      color: #555;
      margin: 0 5px 8px 0;
      font-weight: 500;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
      .service-card-horizontal {
        flex-direction: column-reverse;
      }

      /* Image on top on mobile, or bottom */
      .card-image-right {
        width: 100%;
        height: 200px;
      }

      .why-choose-box {
        margin-top: 30px;
      }
    }
  </style>
</head>

<body class="services-page">

  <?php include 'includes/navbar.php'; ?>

  <main class="main">

    <?php
    $services_data = [

      'general' => [
        'title' => "General Pest Control",
        'desc'  => "Comprehensive pest management for homes and businesses across Sydney — covering the most common household pests with safe, long-lasting treatments.",
        'points' => [
          "Cockroaches, Bedbugs & Rodent treatment",
          "Spider & wasp barrier spraying",
          "Pet & family safe products",
          "Ongoing protection plans available"
        ],
        'image' => "assets/img/services/general1.png"
      ],

      'termite' => [
        'title' => "Termite Inspections & Barriers",
        'desc' => "Comprehensive termite inspections and long-term protective barrier systems to safeguard your property.",
        'points' => [
          "Detailed timber pest inspections",
          "Chemical & physical barrier systems",
          "Pre-purchase termite reports",
          "Ongoing monitoring & prevention"
        ],
        'image' => "assets/img/services/termite.jpg"
      ],


      'rodent' => [
        'title' => "Rodent Control",
        'desc' => "Effective rodent control solutions to eliminate rats and mice from residential and commercial properties.",
        'points' => [
          "Roof void & subfloor inspections",
          "Safe rodent baiting & trapping",
          "Entry point sealing",
          "Commercial rodent management plans"
        ],
        'image' => "assets/img/services/rodent.jpg"
      ],


      'bedbug' => [
        'title' => "Bed Bug Treatments",
        'desc' => "Professional bed bug eradication services to restore comfort and hygiene in your home.",
        'points' => [
          "Thorough inspection process",
          "Heat & chemical treatment options",
          "Mattress & furniture protection",
          "Follow-up monitoring visits"
        ],
        'image' => "assets/img/services/bedbug.jpg"
      ],



      'spider' => [
        'title' => "Spider Extermination",
        'desc' => "Targeted spider control treatments to protect your home from dangerous and nuisance species.",
        'points' => [
          "Web removal services",
          "Redback & funnel-web treatment",
          "Exterior barrier spraying",
          "Ongoing prevention plans"
        ],
        'image' => "assets/img/services/spider.jpg"
      ]

    ];

    ?>

    <section class="service-hero">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="page-title" style="background-color: #374253;">
              <div class="container">
                <nav class="breadcrumbs">
                  <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current text-light">Our Services</li>
                  </ol>
                </nav>
              </div>
            </div>
            <h1 style="color: white;">Our Pest Control Services<br>in Western Sydney</h1>
            <p class="lead">Safe, effective, and eco-friendly pest control tailored for homes and businesses throughout Western Sydney.</p>

            <div class="d-flex flex-wrap gap-2">
              <a href="#quote-form" class="hero-btn-red">Get Free Inspection</a>
              <a href="tel:0410718975" class="hero-btn-outline">Call 0410 718 975</a>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="why-choose-box">
              <h5>Why Choose Verispect</h5>
              <ul>
                <li>Licensed & Insured</li>
                <li>Pet & Family Safe Methods</li>
                <li>Same-Day Service Available</li>
                <li>Long-Term Protection</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-8" data-aos="fade-up">

            <?php foreach ($services_data as $key => $data): ?>
              <div class="service-card-horizontal">
                <div class="card-content">
                  <h3><?= htmlspecialchars($data['title']); ?></h3>
                  <p><?= htmlspecialchars($data['desc']); ?></p>
                  <ul class="card-bullets">
                    <?php foreach ($data['points'] as $point): ?>
                      <li><?= htmlspecialchars($point); ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="card-image-right" style="background-image: url('<?= htmlspecialchars($data['image']); ?>');"></div>
              </div>
            <?php endforeach; ?>

          </div>

          <div class="col-lg-4" id="quote-form">
            <div class="sticky-top" style="top: 100px; z-index: 990;">

              <div class="sidebar-panel">
                <div class="sidebar-header-red">
                  Get Your Free Quote Today!
                </div>
                <div class="sidebar-body">

                  <form method="post"
                    action="forms/contact.php"
                    class="php-email-form">

                    <!-- Honeypot -->
                    <input type="text" name="company" hidden>

                    <!-- Name -->
                    <div class="form-group mb-3">
                      <input type="text"
                        name="name"
                        class="form-control"
                        placeholder="Your Name *"
                        required>
                    </div>

                    <!-- Phone -->
                    <div class="form-group mb-3">
                      <input type="tel"
                        name="phone"
                        class="form-control"
                        placeholder="Mobile Number (e.g. 0410 718 975) *"
                        autocomplete="tel"
                        required>
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-3">
                      <input type="email"
                        name="email"
                        class="form-control"
                        placeholder="Email *"
                        required>
                    </div>

                    <!-- Service -->
                    <div class="form-group mb-3">
                      <select name="service"
                        class="form-select"
                        required>
                        <option value="" disabled selected>Select Service</option>
                        <option value="termite">Termite Inspections and Barriers</option>
                        <option value="rodent">Rodent Control</option>
                        <option value="bedbug">Bed Bug Treatments</option>
                        <option value="spider">Spider Extermination</option>
                      </select>
                    </div>

                    <!-- Property Type -->
                    <div class="form-group mb-3">
                      <select name="property_type"
                        class="form-select"
                        required>
                        <option value="" disabled selected>Property Type</option>
                        <option value="house">House</option>
                        <option value="apartment">Apartment</option>
                        <option value="office">Office</option>
                        <option value="warehouse">Warehouse</option>
                      </select>
                    </div>

                    <!-- Address -->
                    <div class="form-group mb-3">
                      <input type="text"
                        name="address"
                        class="form-control"
                        placeholder="Suburb / Address *"
                        required>
                    </div>

                    <div class="form-group mb-3">
                      <div class="recaptcha-wrapper" id="recaptchaWrapper">
                        <div class="g-recaptcha"
                          data-sitekey="6LcguIEsAAAAAK8Lf1wREtF5E03XzGs1LKI6VtPb">
                        </div>
                        <div class="invalid-feedback" id="recaptchaError" style="display:none;">
                          Please confirm you are not a robot.
                        </div>
                      </div>
                    </div>

                    <!-- Status UI (needed for validate.js) -->
                    <div class="loading">Loading</div>

                    <div class="error-message"></div>

                    <div class="sent-message">
                      Thank you! We'll contact you shortly.
                    </div>


                    <button type="submit" class="btn-quote-submit w-100">
                      Submit Request
                    </button>
                  </form>

                </div>
              </div>

              <div class="sidebar-panel">
                <div class="sidebar-body text-center">
                  <div class="stars">★★★★★</div>
                  <p class="testimonial-text">"Very happy with the service. Friendly and professional team, and the treatment worked perfectly."</p>
                  <span class="testimonial-author">- Krutik Patel, Hills District</span>
                </div>
              </div>

              <div class="sidebar-panel">
                <div class="sidebar-body">
                  <h6 class="fw-bold mb-3">Service Areas</h6>
                  <div>
                    <span class="area-chip">Parramatta</span>
                    <span class="area-chip">Blacktown</span>
                    <span class="area-chip">Penrith</span>
                    <span class="area-chip">Liverpool</span>
                    <span class="area-chip">Campbelltown</span>
                    <span class="area-chip">Hills District</span>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <script src="assets/js/main.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>
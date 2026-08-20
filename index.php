<?php
$currentPage = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home | Verispect</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="preload" as="image" href="assets/img/hero-bg.webp" fetchpriority="high">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .more-services-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .more-services-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    .more-services-card .icon {
      font-size: 42px;
    }

    /* ===========================
   HERO CHECKLIST
=========================== */
    .hero .hero-checklist {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .hero .hero-checklist li {
      color: #fff;
      font-size: 15px;
      font-weight: 500;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .hero .hero-checklist li i {
      color: #28a745;
      font-size: 17px;
      flex-shrink: 0;
    }

    .hero .btn-phone-number {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.25);
      color: #fff;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      transition: background 0.3s;
    }

    .hero .btn-phone-number:hover {
      background: rgba(255, 255, 255, 0.22);
      color: #fff;
    }

    /* ===========================
   TRUST BAR
=========================== */
    .trust-bar {
      background: #ffffff;
      padding: 22px 0;
      border-bottom: 3px solid #ffffff;
      margin-bottom: 100px;
      margin-top: 50px;
    }

    .trust-bar .trust-item {
      padding: 14px 10px;
    }

    .trust-bar .trust-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 14px;
    }

    .trust-bar .trust-icon {
      font-size: 32px;
      color: #e82d2d;
      line-height: 1;
      flex-shrink: 0;
    }

    .trust-bar .trust-icon.google-icon {
      font-size: unset;
    }

    .trust-bar .trust-text {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    .trust-bar .trust-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: #616161;
      margin-bottom: 2px;
    }

    .trust-bar .trust-value {
      font-size: 15px;
      font-weight: 700;
      color: #000000;
      line-height: 1.3;
    }

    .trust-bar .trust-sub {
      font-size: 12px;
      color: #616161;
      margin-top: 1px;
    }

    .trust-bar .trust-stars i {
      color: #f5c518;
      font-size: 13px;
    }

    .trust-bar .trust-divider {
      width: 1px;
      height: 50px;
      background: rgba(0, 0, 0, 0.47);
      align-self: center;
    }

    @media (max-width: 767px) {
      .trust-bar .trust-inner {
        flex-direction: column;
        gap: 6px;
        text-align: center;
      }

      .trust-bar .trust-text {
        text-align: center;
        align-items: center;
      }
    }

    /* ===========================
           CONTACT IMAGE PANEL
        =========================== */
    .contact-image-panel {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      height: 100%;
      min-height: 420px;
    }

    .contact-image-panel img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .contact-image-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom,
          rgba(20, 25, 40, 0.35) 0%,
          rgba(20, 25, 40, 0.75) 100%);
    }

    .contact-image-badges {
      position: absolute;
      bottom: 28px;
      left: 24px;
      right: 24px;
    }

    .contact-image-badges .badge-item {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .contact-image-badges .badge-item i {
      color: #28c76f;
      font-size: 18px;
      flex-shrink: 0;
    }

    .contact-image-tagline {
      position: absolute;
      top: 28px;
      left: 24px;
      right: 24px;
    }

    .contact-image-tagline h3 {
      color: #fff;
      font-size: 22px;
      font-weight: 700;
      line-height: 1.35;
      margin: 0;
      text-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
    }

    .contact-image-tagline span {
      color: #e82d2d;
    }

    /* ===========================
           RECAPTCHA WRAPPER
        =========================== */
    .recaptcha-wrapper {
      display: flex;
      flex-direction: column;
    }

    .recaptcha-wrapper .invalid-feedback {
      display: block;
      color: #dc3545;
      font-size: 13px;
      margin-top: 5px;
    }

    .recaptcha-wrapper.is-invalid .g-recaptcha>div {
      border: 1px solid #dc3545;
      border-radius: 4px;
    }

    @media (max-width: 991px) {
      .contact-image-panel {
        min-height: 280px;
      }
    }
  </style>

</head>

<body class="index-page">

  <?php include 'includes/navbar.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg.webp" alt="Hero Image" fetchpriority="high" loading="eager" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 data-aos="fade-up" data-aos-delay="100">Sydney's Trusted<br>Pest & Termite Experts</h2>
            <p data-aos="fade-up" data-aos-delay="200">Safe. Licensed. Same-Week Service.</p>

            <ul class="hero-checklist mt-3" data-aos="fade-up" data-aos-delay="250">
              <li><i class="bi bi-check-circle-fill"></i> Fully Licensed & Insured</li>
              <li><i class="bi bi-check-circle-fill"></i> Family & Pet Safe Treatments</li>
              <li><i class="bi bi-check-circle-fill"></i> Fast Response Across Sydney</li>
            </ul>

            <div class="hero-cta mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="tel:+61410718975" class="btn-get-started d-inline-flex align-items-center gap-2">
                <i class="bi bi-telephone-fill"></i>
                <span>Call Now</span>
              </a>
              <a href="tel:+61410718975" class="btn-phone-number d-inline-flex align-items-center ms-3">
                +61 410 718 975
                <i class="bi bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- Trust Bar Section -->
    <section id="trust-bar" class="trust-bar section">
      <div class="container-fluid px-4">
        <div class="row align-items-center justify-content-center g-0 flex-nowrap">

          <!-- Google Rating -->
          <div class="col trust-item">
            <div class="trust-inner">
              <div class="trust-icon google-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 48 48">
                  <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" />
                  <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z" />
                  <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z" />
                  <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.18 1.48-4.97 2.31-8.16 2.31-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" />
                </svg>
              </div>
              <div class="trust-text">
                <span class="trust-label">Google Rating</span>
                <div class="trust-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="trust-sub">5.0 — Verified Reviews</span>
              </div>
            </div>
          </div>

          <div class="trust-divider"></div>

          <!-- Pest License -->
          <div class="col trust-item">
            <div class="trust-inner">
              <div class="trust-icon">
                <i class="bi bi-patch-check"></i>
              </div>
              <div class="trust-text">
                <span class="trust-label">Pest License</span>
                <span class="trust-value">LIC # 5207785</span>
                <span class="trust-sub">Fully Insured & Certified</span>
              </div>
            </div>
          </div>

          <div class="trust-divider"></div>

          <!-- Service Area -->
          <div class="col trust-item">
            <div class="trust-inner">
              <div class="trust-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div class="trust-text">
                <span class="trust-label">Service Area</span>
                <span class="trust-value">Sydney &</span>
                <span class="trust-sub">Surrounding Areas</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Trust Bar Section -->

    <section id="about" class="about section section-bg dark-background" style="margin-top: -120px; z-index: 3;">

      <div class=" container position-relative">

        <div class="row gy-5">

          <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <h3>Verispect provides safe, reliable pest control solutions.</h3>
            <p>
              Verispect delivers professional, licensed pest control for Australian homes and businesses — tackling everything from ants and termites to rodents with safe, effective methods.

            </p>
            <p>
              We combine transparent pricing, environmentally responsible practices, and exceptional service to keep your property protected long-term.
            </p>
            <a href="about.php" class="about-btn align-self-center align-self-xl-start"><span>About us</span> <i
                class="bi bi-chevron-right"></i></a>
          </div>

          <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-search"></i>

                <h4><a href="#about" class="stretched-link">Detailed Inspections</a></h4>
                <p>We identify pest activity at the source, detecting risks early before they turn into costly problems.
                </p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-shield-check"></i>

                <h4><a href="#about" class="stretched-link">Safe & Proven Methods</a></h4>
                <p>Our treatments use industry-approved products that are effective, low-toxicity, and environmentally
                  responsible.</p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-bullseye"></i>

                <h4><a href="#about" class="stretched-link">Targeted Pest Control</a></h4>
                <p>Every treatment is customised to the pest type, property layout, and infestation level — no
                  guesswork.</p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-shield-lock"></i>

                <h4><a href="#about " class="stretched-link">Long-Term Protection</a></h4>
                <p>We don’t just remove pests — we help prevent them from coming back with smart prevention plans.</p>
              </div><!-- Icon-Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Get Quotation Now</h2>
        <p>Request a free inspection — no obligation, no pressure.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-stretch">

          <!-- LEFT: Image Panel -->
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
            <div class="contact-image-panel">
              <!-- Stock pest control image via Unsplash -->
              <img
                src="https://images.unsplash.com/photo-1599686301892-0d8b9b1c8e5e?w=800&q=80"
                onerror="this.onerror=null;this.src='assets/img/hero-bg.webp';"
                alt="Professional pest control technician">
              <div class="contact-image-overlay"></div>

              <div class="contact-image-tagline">
                <h3>Get a <span>Free</span> Pest<br>Inspection Today</h3>
              </div>

              <div class="contact-image-badges">
                <div class="badge-item">
                  <i class="bi bi-check-circle-fill"></i>
                  Fully Licensed & Insured
                </div>
                <div class="badge-item">
                  <i class="bi bi-check-circle-fill"></i>
                  Family & Pet Safe Treatments
                </div>
                <div class="badge-item">
                  <i class="bi bi-check-circle-fill"></i>
                  Same-Week Service Across Sydney
                </div>
                <div class="badge-item">
                  <i class="bi bi-telephone-fill" style="color:#e82d2d;"></i>
                  +61 410 718 975
                </div>
              </div>
            </div>
          </div>

          <!-- RIGHT: Form -->
          <div class="col-lg-6">
            <form id="contactForm" action="forms/contact.php" method="post"
              class="php-email-form" data-aos="fade-up" data-aos-delay="200">

              <div class="row gy-4">

                <!-- Honeypot -->
                <input type="text" name="company" style="display:none" hidden>

                <!-- Name -->
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control"
                    placeholder="Name *" required>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                  <input type="tel" name="phone" class="form-control"
                    placeholder="Mobile Number (e.g. 0410 718 975)" required>
                </div>

                <!-- Email -->
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control"
                    placeholder="Email *" required>
                </div>

                <!-- Service -->
                <div class="col-md-6">
                  <select name="service" class="form-select" required>
                    <option value="" disabled selected>Select Service</option>
                    <option value="general">General Pest Control</option>
                    <option value="termite">Termite Treatment</option>
                    <option value="rodent">Rodent Control</option>
                    <option value="bedbug">Bed Bug Treatments</option>
                    <option value="spider">Spider Extermination</option>
                  </select>
                </div>

                <!-- Property Type -->
                <div class="col-md-6">
                  <select name="property_type" class="form-select" required>
                    <option value="" disabled selected>Property Type</option>
                    <option value="house">House</option>
                    <option value="apartment">Apartment / Unit</option>
                    <option value="townhouse">Townhouse</option>
                    <option value="commercial">Commercial</option>
                    <option value="warehouse">Warehouse / Industrial</option>
                    <option value="strata">Strata / Common Area</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <!-- Address -->
                <div class="col-md-12">
                  <textarea name="address" class="form-control" rows="2"
                    placeholder="Suburb / Address *" required></textarea>
                </div>

                <!-- reCAPTCHA v2 -->
                <div class="col-md-12">
                  <div class="recaptcha-wrapper" id="recaptchaWrapper">
                    <div class="g-recaptcha"
                      data-sitekey="6LcguIEsAAAAAK8Lf1wREtF5E03XzGs1LKI6VtPb">
                    </div>
                    <div class="invalid-feedback" id="recaptchaError" style="display:none;">
                      Please confirm you are not a robot.
                    </div>
                  </div>
                </div>

                <!-- Submit -->
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your enquiry has been sent. We'll be in touch shortly!</div>

                  <button type="submit" class="btn btn-primary px-5 py-2">
                    Get Free Inspection
                  </button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

    <!-- Services Section -->
    <section id="services" class="services section section-bg dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Pest Control Services</h2>
        <p>Reliable, safe, and effective pest management solutions for Sydney homes, rentals, and businesses.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <!-- Service 1 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-house icon flex-shrink-0"></i>
              <div>
                <h4 class="title">
                  <a href="services.php" class="stretched-link">Residential Pest Control</a>
                </h4>
                <p class="description">
                  Comprehensive pest treatments for houses, apartments, and units. We protect your home from termits, rodent, spiders and more using family- and pet-safe methods.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 2 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title">
                  <a href="services.php" class="stretched-link">End of Lease Pest Control</a>
                </h4>
                <p class="description">
                  Fast and affordable pest control for tenants, landlords, and property managers. Includes treatments
                  suitable for rental inspections and strata requirements across Sydney.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 3 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-building icon flex-shrink-0"></i>
              <div>
                <h4 class="title">
                  <a href="services.php" class="stretched-link">Commercial Pest Management</a>
                </h4>
                <p class="description">
                  Tailored pest control programs for cafés, restaurants, offices, warehouses, and retail spaces.
                  Fully compliant with Australian health and safety standards.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 4 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-search icon flex-shrink-0"></i>
              <div>
                <h4 class="title">
                  <a href="services.php" class="stretched-link">Termite Inspections & Treatment</a>
                </h4>
                <p class="description">
                  Detailed termite inspections using modern detection tools, followed by proven treatment solutions to
                  protect your property from costly structural damage.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 5 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bug icon flex-shrink-0"></i>
              <div>
                <h4 class="title">
                  <a href="services.php" class="stretched-link">Spider, bedbug & Rodent Control</a>
                </h4>
                <p class="description">
                  Targeted treatments for Sydney’s most common pests. Long-lasting protection designed to eliminate
                  infestations and prevent them from returning.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 6 -->
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100 more-services-card text-center">
              <i class="bi bi-grid-3x3-gap icon flex-shrink-0"></i>
              <div class="w-100">
                <h4 class="title">
                  <a href="services.php" class="stretched-link">Explore All Services</a>
                </h4>
                <p class="description">
                  Explore our full range of professional pest control services across Sydney.
                </p>
                <div class="mt-3 fw-semibold">
                  View All Services →
                </div>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>See what our neighbors across Sydney are saying about our pest control services.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 2000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-red">S</div>
                <h3>Shubham Breeder</h3>
                <h4>a month ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I had an excellent experience with Verispect for pest control services! The team was professional, thorough, and explained everything clearly. They were punctual, reliable, and made the whole process stress-free. Highly recommend Verispect.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-green">S</div>
                <h3>Sandra Tsang</h3>
                <h4>6 days ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excellent experience with Shubham. He provided a detailed and comprehensive report. I especially appreciated that he took the time to answer all my questions over the phone after the inspection. Highly recommend Shubham.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-blue">R</div>
                <h3>Reginald Prakash</h3>
                <h4>a month ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Had my property inspected by Verispect inspector Shubham. He was very punctual, and experienced. Did a thorough inspection and explained all details. Not forgetting very friendly, affordable and professional customer service as well.<br><br>Overall I will definitely use the same service in future if needed and 100% recommend anyone who needs their service.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-amber">S</div>
                <h3>Sunchu Kartik</h3>
                <h4>a week ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Best service as well good price and awesome behave and admirable gesture from team verispect</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-blue">K</div>
                <h3>Krutik Patel</h3>
                <h4>a week ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Very happy with the service. Friendly and professional team, and the treatment worked perfectly. No more pests in the house. Will definitely use again.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div><!-- -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-amber">S</div>
                <h3>Sara Mills</h3>
                <h4>a week ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excellent service! They did all of my home and outside. Very informative and friendly.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div> <!-- -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="rv-avatar rv-av-red">O</div>
                <h3>Opal rick</h3>
                <h4>a month ago</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Great service & thoroughly professional! &amp; Thanks for a wonderful job !
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div class="mt-3 text-muted small">
                  <i class="bi bi-google"></i> <strong>Google Rating:</strong> 5.0/5
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- faq section start -->
    <section id="faq" class="faq section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Everything you need to know about our pest control treatments and how we keep your home safe.</p>
      </div>
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Are your pest control treatments safe for pets and children?</h3>
                <div class="faq-content">
                  <p>Yes, the safety of your family and pets is our top priority. We use eco-friendly, EPA-approved products that are specifically applied in targeted areas. We generally recommend keeping children and pets off treated surfaces until they are completely dry (usually 1-2 hours).</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>How do I know which pest service I need?</h3>
                <div class="faq-content">
                  <p>Most homeowners start with our **General Pest Protection**, which covers ants, spiders, and common crawling insects. However, if you see specific signs like "mud tubes" (termites) or "coffee-ground" droppings (cockroaches), you should select a specialized treatment. Not sure? Choose "Request an Inspection" and our experts will diagnose it for you.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Do I need to leave my home during the treatment?</h3>
                <div class="faq-content">
                  <p>For most standard exterior and interior treatments, you do not need to leave your home. However, specialized services like bed bug heat treatments or full-home fumigation may require you to vacate for a few hours. Your technician will provide specific instructions based on the service you choose.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>How long does it take to see results?</h3>
                <div class="faq-content">
                  <p>In most cases, you will see a significant reduction in pest activity within 24 to 48 hours. For certain pests like ants or termites, it may take a few days for the baiting system to work through the entire colony. We offer a 100% satisfaction guarantee—if pests return, so do we.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>How much does a typical pest control service cost?</h3>
                <div class="faq-content">
                  <p>Pricing depends on the size of your property and the type of pest involved. One-time emergency treatments start at a flat rate, while our ongoing maintenance plans offer the best value for year-round protection. You can get an instant, no-obligation quote by filling out our enquiry form.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Do you offer environmentally friendly or "green" options?</h3>
                <div class="faq-content">
                  <p>Absolutely. We offer Integrated Pest Management (IPM) solutions that focus on non-chemical prevention, exclusion methods, and botanical-based sprays. If you prefer a 100% organic approach, please mention this in your enquiry so we can tailor your service plan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- faq section end -->

  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
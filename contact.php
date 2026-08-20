<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact | Verispect</title>
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

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- reCAPTCHA v2 -->


    <style>
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

    <?php $currentPage = 'contact';
    include 'includes/navbar.php'; ?>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" style="background-color: #374253;">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current text-light">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="text-light">Enquiry Form</h1>
            </div>
        </div><!-- End Page Title -->

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
                                onerror="this.onerror=null;this.src='assets/img/hero-bg.png';"
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
                                        <option value="cockroach">Cockroach Management</option>
                                        <option value="rodent">Rodent Control</option>
                                        <option value="possum">Possum Removal</option>
                                        <option value="ant">Ant Control</option>
                                        <option value="bedbug">Bed Bug Treatments</option>
                                        <option value="flea">Flea Control</option>
                                        <option value="wasp">Wasp and Bee Removal</option>
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

        <!-- Faq Section -->
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
        </section><!-- /Faq Section -->

    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

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
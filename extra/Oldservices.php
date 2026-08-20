<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services | Verispect</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/css/intlTelInput.css">



  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .help-box {
      padding: 25px;
      background: #f8f9fa;
      border-radius: 10px;
    }

    .help-icon {
      font-size: 36px;
      color: #fff;
      margin-bottom: 10px;
    }

    .services-list a {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 14px;
      border-radius: 6px;
      color: #333;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .services-list a:hover {
      background: #f5f7fa;
    }

    .services-list a.active {
      background: #e03a3c;
      color: #fff;
    }

    .services-list a.active i {
      color: #fff;
    }
    .btn-red{
      border-color: #e03a3c;
      color: #e03a3c;
    }
    .btn-red:hover{
      background-color: #e03a3c;
      color: #fff;
    }.btn-red:focus, .btn-red:active {
      background-color: #e03a3c;
      color: #fff;
      border-color: #e03a3c;
      box-shadow: 0 0 0 0.25rem rgba(224, 58, 60, 0.5);
    }

    /* Card Container */
    .services-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 20px;
    }
    
    .service-item-card {
      background: #fff;
      border: 1px solid #e5e5e5;
      border-radius: 12px;
      padding: 20px;
      transition: all 0.3s ease;
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }
    
    .service-item-card:hover {
      border-color: #e03a3c;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }
    
    /* Header Area: Image + Basic Info */
    .card-main-row {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    
    .card-img-wrapper {
      flex-shrink: 0;
      width: 80px; /* 1x1 Ratio */
      height: 80px;
      border-radius: 8px;
      overflow: hidden;
      background: #f8f9fa;
    }
    
    .card-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .card-title-area h4 {
      margin: 0;
      color: #333;
      font-weight: 700;
      font-size: 1.2rem;
      transition: color 0.3s;
    }
    
    .service-item-card:hover .card-title-area h4 {
      color: #e03a3c;
    }
    
    .card-subtitle {
      color: #777;
      font-size: 0.9rem;
      margin-top: 5px;
    }
    
    /* Expandable Content */
    .card-expanded-content {
      max-height: 0; /* Hidden by default */
      opacity: 0;
      transition: all 0.4s ease-in-out;
      padding-left: 100px; /* Aligns text under the title, not the image */
    }
    
    /* Hover or Active State Expansion */
    .service-item-card:hover .card-expanded-content {
      max-height: 400px; /* Adjust based on content length */
      opacity: 1;
      margin-top: 15px;
    }
    
    .card-points {
      list-style: none;
      padding: 0;
      margin: 10px 0;
    }
    
    .card-points li {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 5px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .card-points i {
      color: #e03a3c;
      font-size: 1rem;
    }
    
    .btn-card-link {
      display: inline-block;
      margin-top: 10px;
      color: #e03a3c;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9rem;
    }
  </style>

</head>

<body class="service-details-page">

<?php $currentPage = 'services'; include 'includes/navbar.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current text-dark" id="serviceTitle2"></li>
          </ol>
        </nav>
        <h1 class="text-dark" id="serviceTitle1"></h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <?php
            $services = [
              'mosquito'  => 'Mosquito Pest Control',
              'termite'   => 'Termite Inspections & Barriers',
              'cockroach' => 'Cockroach Management',
              'rodent'    => 'Rodent Control',
              'possum'    => 'Possum Removal',
              'ant'       => 'Ant Control',
              'bedbug'    => 'Bed Bug Treatments',
              'flea'      => 'Flea Control',
              'wasp'      => 'Wasp & Bee Removal',
              'spider'    => 'Spider Extermination'
            ];

            $currentService = $_GET['service'] ?? 'mosquito';
            ?>

            <!-- MOBILE COLLAPSIBLE TOGGLE -->
            <div class="d-lg-none mb-3">
              <button class="btn w-100 d-flex justify-content-between align-items-center btn-red"
                data-bs-toggle="collapse"
                data-bs-target="#servicesMenu"
                aria-expanded="false">
                <span>Our Services</span>
                <i class="bi bi-chevron-down"></i>
              </button>
            </div>

            <!-- SERVICES LIST -->
            <div id="servicesMenu" class="collapse d-lg-block">
              <div class="services-list mb-3">
                <?php foreach ($services as $key => $label): ?>
                  <a href="services.php?service=<?= $key; ?>"
                    class="<?= ($currentService === $key) ? 'active' : ''; ?>">
                    <i class="bi bi-arrow-right-circle"></i>
                    <span><?= $label; ?></span>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>


            <!-- MOBILE TOGGLE BUTTON -->
            <div class="d-lg-none mb-3">
              <button class="btn w-100 d-flex justify-content-between align-items-center btn-red"
                data-bs-toggle="collapse"
                data-bs-target="#helpBox"
                aria-expanded="false">
                <span>Have a Question?</span>
                <i class="bi bi-chevron-down"></i>
              </button>
            </div>

            <!-- HELP / CONTACT BOX -->
            <div id="helpBox" class="collapse d-lg-block">
              <div class="help-box d-flex flex-column justify-content-center align-items-center text-center">
                <i class="bi bi-headset help-icon"></i>
                <h4>Have a Question?</h4>

                <p class="d-flex align-items-center mt-2 mb-0">
                  <i class="bi bi-telephone me-2"></i>
                  <span>+61 410 718 975</span>
                </p>

                <p class="d-flex align-items-center mt-1 mb-0">
                  <i class="bi bi-envelope me-2"></i>
                  <a href="mailto:info@verispect.com.au">info@verispect.com.au</a>
                </p>
              </div>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200" id="serviceDetails">
            <h3 id="serviceTitle"></h3>

            <img id="serviceImage" src="" alt="" class="img-fluid services-img">

            <p id="serviceIntro"></p>

            <ul id="servicePoints"></ul>

            <p id="serviceMiddle"></p>
            <p id="serviceEnd"></p>
          </div>


        </div>

      </div>

    </section><!-- /Service Details Section -->

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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    const services = {
      termite: {
        title: "Termite Control & Inspection",
        image: "assets/img/services.jpg",
        intro: "Professional termite inspections and treatments designed to protect Australian properties.",
        points: [
          "Comprehensive termite inspections",
          "Advanced treatment solutions",
          "Long-term property protection"
        ],
        middle: "Our technicians identify termite activity early to prevent costly structural damage.",
        end: "We use safe, industry-approved methods to ensure complete termite control and peace of mind."
      },

      rodent: {
        title: "Rodent Control Services",
        image: "assets/img/services.jpg",
        intro: "Effective rodent control solutions to keep your home and workplace hygienic and safe.",
        points: [
          "Safe rodent removal",
          "Entry point identification",
          "Prevention-focused approach"
        ],
        middle: "Rodents can spread disease and cause property damage if left untreated.",
        end: "Our targeted rodent control ensures long-lasting protection."
      },

      mosquito: {
        title: "Mosquito Pest Control",
        image: "assets/img/services.jpg",
        intro: "Comprehensive mosquito control services to reduce populations and minimize disease risk.",
        points: [
          "Source reduction strategies",
          "Targeted insecticide applications",
          "Ongoing monitoring and maintenance"
        ],
        middle: "Mosquitoes are not only a nuisance but also vectors for serious diseases.",
        end: "Our integrated approach effectively reduces mosquito populations around your property."
      },

      cockroach: {
        title: "Cockroach Management",
        image: "assets/img/services.jpg",
        intro: "Specialized cockroach control services to eliminate infestations and prevent recurrence.",
        points: [
          "Thorough inspections",
          "Customized treatment plans",
          "Sanitation recommendations"
        ],
        middle: "Cockroaches can contaminate food and surfaces, posing health risks.",
        end: "We implement effective strategies to eradicate cockroach populations."
      },

      possum: {
        title: "Possum Removal Services",
        image: "assets/img/services.jpg",
        intro: "Humane possum removal and exclusion services to protect your property.",
        points: [
          "Safe trapping and relocation",
          "Exclusion techniques",
          "Property damage repair"
        ],
        middle: "Possums can cause significant damage to roofs and gardens.",
        end: "Our expert team ensures safe removal and prevents future intrusions."
      },

      ant: {
        title: "Ant Control Solutions",
        image: "assets/img/services.jpg",
        intro: "Effective ant control services to eliminate infestations and protect your property.",
        points: [
          "Comprehensive inspections",
          "Targeted treatments",
          "Preventative measures"
        ],
        middle: "Ants can quickly invade homes and businesses, causing discomfort and damage.",
        end: "We provide tailored solutions to eradicate ants and prevent future issues."
      },

      bedbug: {
        title: "Bed Bug Treatments",
        image: "assets/img/services.jpg",
        intro: "Professional bed bug extermination services to ensure a restful, pest-free environment.",
        points: [
          "Thorough inspections",
          "Effective treatment options",
          "Follow-up monitoring"
        ],
        middle: "Bed bugs can cause discomfort and disrupt sleep if not addressed promptly.",
        end: "Our comprehensive treatments eliminate bed bugs and restore peace of mind."
      },

      flea: {
        title: "Flea Control Services",
        image: "assets/img/services.jpg",
        intro: "Specialized flea control solutions to protect your home and pets from infestations.",
        points: [
          "Detailed inspections",
          "Targeted treatments",
          "Preventative advice"
        ],
        middle: "Fleas can cause irritation and transmit diseases to both humans and pets.",
        end: "We implement effective strategies to eliminate fleas and prevent future outbreaks."
      },

      wasp: {
        title: "Wasp & Bee Removal",
        image: "assets/img/services.jpg",
        intro: "Safe and efficient wasp and bee removal services to protect your property.",
        points: [
          "Nest identification and removal",
          "Preventative treatments",
          "Safety-focused approach"
        ],
        middle: "Wasps and bees can pose significant risks, especially to those with allergies.",
        end: "Our expert team ensures safe removal and minimizes future risks."
      },

      spider: {
        title: "Spider Extermination",
        image: "assets/img/services.jpg",
        intro: "Comprehensive spider control services to eliminate infestations and prevent recurrence.",
        points: [
          "Thorough inspections",
          "Customized treatment plans",
          "Ongoing monitoring"
        ],
        middle: "Spiders can create webs and nests that are unsightly and potentially hazardous.",
        end: "We implement effective strategies to eradicate spider populations."
      }

    };
  </script>
  <script>
    const params = new URLSearchParams(window.location.search);
    const serviceKey = params.get("service") || "termite";
    const service = services[serviceKey];

    if (service) {
      document.getElementById("serviceTitle").textContent = service.title;
      document.getElementById("serviceTitle1").textContent = service.title;
      document.getElementById("serviceTitle2").textContent = service.title;
      document.getElementById("serviceImage").src = service.image;
      document.getElementById("serviceIntro").textContent = service.intro;
      document.getElementById("serviceMiddle").textContent = service.middle;
      document.getElementById("serviceEnd").textContent = service.end;

      const ul = document.getElementById("servicePoints");
      ul.innerHTML = "";
      service.points.forEach(point => {
        ul.innerHTML += `<li><i class="bi bi-check-circle"></i> <span>${point}</span></li>`;
      });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/js/intlTelInput.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/js/utils.js"></script>

</body>

</html>
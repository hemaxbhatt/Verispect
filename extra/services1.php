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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/css/intlTelInput.css">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
  /* --- ENHANCED EXPANDABLE CARD STYLES --- */
  
  .services-list {
    padding: 60px 0;
    background-color: #fcfcfc;
  }

  .services-grid {
    display: flex;
    flex-direction: column;
    gap: 30px; /* Increased gap for a spacious feel */
    margin: 0 auto;
    width: 100%; 
  }

  .service-item-card {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 16px; /* Rounder corners for a modern look */
    padding: 40px; /* Increased padding for "Bigger" look */
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    cursor: pointer;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
  }

  .service-item-card:hover {
    border-color: #e03a3c;
    box-shadow: 0 20px 40px rgba(224, 58, 60, 0.08);
    transform: translateY(-5px);
  }

  .card-main-row {
    display: flex;
    align-items: center; /* Centered vertically for a balanced header */
    gap: 35px;
  }

  /* Bigger 1x1 Image Wrapper */
  .card-img-wrapper {
    flex-shrink: 0;
    width: 120px; /* Increased from 80px */
    height: 120px;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #f0f0f0;
  }

  .card-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-title-area h4 {
    margin: 0 0 12px 0;
    color: #222;
    font-weight: 700;
    font-size: 1.85rem; /* Noticeably larger title */
    transition: color 0.3s;
  }

  .service-item-card:hover .card-title-area h4 {
    color: #e03a3c;
  }

  .card-subtitle {
    color: #555;
    font-size: 1.15rem; /* Increased font size */
    line-height: 1.6;
    max-width: 850px;
  }

  /* The Expandable Section */
  .card-expanded-content {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: all 0.5s ease-in-out;
    padding-left: 155px; /* Aligns content with the end of the larger image */
  }

  .service-item-card:hover .card-expanded-content {
    max-height: 600px;
    opacity: 1;
    margin-top: 35px;
  }

  /* Grid-based Bullet Points for better space usage */
  .card-points {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Two columns if space permits */
    gap: 15px;
  }

  .card-points li {
    font-size: 1.1rem;
    color: #444;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .card-points i {
    color: #e03a3c;
    font-size: 1.3rem;
    flex-shrink: 0;
  }

  /* The Link Button - Enhanced for "Big" feel */
  .btn-card-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #e03a3c;
    font-weight: 700;
    text-decoration: none;
    font-size: 1.1rem;
    padding: 12px 24px;
    border: 2px solid #e03a3c;
    border-radius: 8px;
    transition: all 0.3s ease;
  }
  
  .btn-card-link:hover {
     background: #e03a3c;
     color: #fff;
     gap: 15px;
  }

  /* Mobile Logic */
  @media (max-width: 991px) {
    .card-expanded-content { padding-left: 0; }
    .card-main-row { flex-direction: column; align-items: flex-start; text-align: left; }
    .card-img-wrapper { width: 90px; height: 90px; }
    .card-title-area h4 { font-size: 1.5rem; }
    .card-points { grid-template-columns: 1fr; }
  }

  /* Filter Sidebar Styling */
  .filter-sidebar {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    border: 1px solid #eee;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
  }

  .filter-title {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 20px;
    color: #333;
    border-bottom: 2px solid #f8f9fa;
    padding-bottom: 10px;
  }

  .filter-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .filter-btn {
    background: #f8f9fa;
    border: 1px solid #eee;
    padding: 12px 15px;
    border-radius: 8px;
    text-align: left;
    font-weight: 500;
    transition: all 0.3s ease;
    color: #555;
  }

  .filter-btn:hover {
    background: #fff;
    border-color: #e03a3c;
    color: #e03a3c;
  }

  .filter-btn.active {
    background: #e03a3c;
    color: #fff;
    border-color: #e03a3c;
  }

  /* Search Input Styling */
  #serviceSearch {
    border-radius: 8px;
    padding: 12px;
    border: 1px solid #eee;
    background: #fcfcfc;
  }

  #serviceSearch:focus {
    border-color: #e03a3c;
    box-shadow: 0 0 0 0.2rem rgba(224, 58, 60, 0.15);
  }
</style>

</head>

<body class="services-list-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Verispect</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home<br></a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Services</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="services.php?service=mosquito">Mosquito Pest Control</a></li>
              <li><a href="services.php?service=termite">Termite Inspections & Barriers</a></li>
              <li><a href="services.php?service=cockroach">Cockroach Management</a></li>
              <li><a href="services.php?service=rodent">Rodent Control</a></li>
              <li><a href="services.php?service=possum">Possum Removal</a></li>
              <li><a href="services.php?service=ant">Ant Control</a></li>
              <li><a href="services.php?service=bedbug">Bed Bug Treatments</a></li>
              <li><a href="services.php?service=flea">Flea Control</a></li>
              <li><a href="services.php?service=wasp">Wasp & Bee Removal</a></li>
              <li><a href="services.php?service=spider">Spider Extermination</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="contact.php">Enquire Now</a>

    </div>
  </header>

  <main class="main">

    <div class="page-title dark-background">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current text-dark">Services</li>
          </ol>
        </nav>
        <h1 class="text-dark">Our Services</h1>
      </div>
    </div><?php
    // Define the services data in PHP so we can loop through it to generate cards.
    // This data is taken directly from the JavaScript in the original file.
    // Note: Using the same placeholder image 'assets/img/services.jpg' as defined in the original JS.
    $services_data = [
        'mosquito' => [
            'title' => "Mosquito Pest Control",
            'subtitle' => "Comprehensive mosquito control services to reduce populations and minimize disease risk.",
            'points' => ["Source reduction strategies", "Targeted insecticide applications", "Ongoing monitoring and maintenance"],
            'image' => "assets/img/services.jpg" 
        ],
        'termite' => [
            'title' => "Termite Inspections & Barriers",
            'subtitle' => "Professional termite inspections and treatments designed to protect Australian properties.",
            'points' => ["Comprehensive termite inspections", "Advanced treatment solutions", "Long-term property protection"],
            'image' => "assets/img/services.jpg"
        ],
        'cockroach' => [
            'title' => "Cockroach Management",
            'subtitle' => "Specialized cockroach control services to eliminate infestations and prevent recurrence.",
            'points' => ["Thorough inspections", "Customized treatment plans", "Sanitation recommendations"],
            'image' => "assets/img/services.jpg"
        ],
        'rodent' => [
            'title' => "Rodent Control",
            'subtitle' => "Effective rodent control solutions to keep your home and workplace hygienic and safe.",
            'points' => ["Safe rodent removal", "Entry point identification", "Prevention-focused approach"],
            'image' => "assets/img/services.jpg"
        ],
        'possum' => [
            'title' => "Possum Removal",
            'subtitle' => "Humane possum removal and exclusion services to protect your property.",
            'points' => ["Safe trapping and relocation", "Exclusion techniques", "Property damage repair"],
            'image' => "assets/img/services.jpg"
        ],
        'ant' => [
            'title' => "Ant Control",
            'subtitle' => "Effective ant control services to eliminate infestations and protect your property.",
            'points' => ["Comprehensive inspections", "Targeted treatments", "Preventative measures"],
            'image' => "assets/img/services.jpg"
        ],
        'bedbug' => [
            'title' => "Bed Bug Treatments",
            'subtitle' => "Professional bed bug extermination services to ensure a restful, pest-free environment.",
            'points' => ["Thorough inspections", "Effective treatment options", "Follow-up monitoring"],
            'image' => "assets/img/services.jpg"
        ],
        'flea' => [
            'title' => "Flea Control",
            'subtitle' => "Specialized flea control solutions to protect your home and pets from infestations.",
            'points' => ["Detailed inspections", "Targeted treatments", "Preventative advice"],
            'image' => "assets/img/services.jpg"
        ],
        'wasp' => [
            'title' => "Wasp & Bee Removal",
            'subtitle' => "Safe and efficient wasp and bee removal services to protect your property.",
            'points' => ["Nest identification and removal", "Preventative treatments", "Safety-focused approach"],
            'image' => "assets/img/services.jpg"
        ],
        'spider' => [
            'title' => "Spider Extermination",
            'subtitle' => "Comprehensive spider control services to eliminate infestations and prevent recurrence.",
            'points' => ["Thorough inspections", "Customized treatment plans", "Ongoing monitoring"],
            'image' => "assets/img/services.jpg"
        ]
    ];
    ?>

    <section id="services-list" class="services-list section section-bg">
  <div class="container-fluid px-lg-5" data-aos="fade-up"> <div class="row justify-content-center">
      
      <div class="col-lg-8">
        <div class="services-grid" id="servicesGrid">
          <?php foreach ($services_data as $key => $data): ?>
            <div class="service-item-card" data-category="<?= ($key == 'termite' || $key == 'rodent') ? 'common' : 'specialized'; ?>">
              <div class="card-main-row">
                <div class="card-img-wrapper">
                  <img src="<?= htmlspecialchars($data['image']); ?>" alt="<?= htmlspecialchars($data['title']); ?>">
                </div>
                <div class="card-title-area">
                  <h4><?= htmlspecialchars($data['title']); ?></h4>
                  <div class="card-subtitle"><?= htmlspecialchars($data['subtitle']); ?></div>
                </div>
              </div>
              
              <div class="card-expanded-content">
                <hr style="margin: 0; border-color: rgba(0,0,0,0.05);">
                <ul class="card-points">
                  <?php foreach ($data['points'] as $point): ?>
                    <li><i class="bi bi-check2-circle"></i> <span><?= htmlspecialchars($point); ?></span></li>
                  <?php endforeach; ?>
                </ul>
                <a href="services.php?service=<?= $key; ?>" class="btn-card-link">
                  Learn More <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="filter-sidebar sticky-top" style="top: 100px;">
          <h5 class="filter-title">Filter Services</h5>
          <div class="filter-options">
            <button class="filter-btn active" onclick="filterServices('all')">All Services</button>
            <button class="filter-btn" onclick="filterServices('common')">Common Pests</button>
            <button class="filter-btn" onclick="filterServices('specialized')">Specialized Treatments</button>
          </div>
          
          <div class="mt-4">
            <h5 class="filter-title">Search</h5>
            <div class="search-box">
              <input type="text" id="serviceSearch" onkeyup="searchServices()" placeholder="e.g. Termite..." class="form-control">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section></main>

  <?php include 'includes/footer.php'; ?>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/js/main.js"></script>

  <script>
      function filterServices(category) {
      // Update active button
      const buttons = document.querySelectorAll('.filter-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      event.currentTarget.classList.add('active');
                    
      // Filter cards
      const cards = document.querySelectorAll('.service-item-card');
      cards.forEach(card => {
          if (category === 'all' || card.getAttribute('data-category') === category) {
              card.style.display = 'block';
          } else {
              card.style.display = 'none';
          }
      });
  }
                    
  function searchServices() {
      const input = document.getElementById('serviceSearch').value.toLowerCase();
      const cards = document.querySelectorAll('.service-item-card');
                    
      cards.forEach(card => {
          const title = card.querySelector('h4').innerText.toLowerCase();
          const subtitle = card.querySelector('.card-subtitle').innerText.toLowerCase();
                    
          if (title.includes(input) || subtitle.includes(input)) {
              card.style.display = 'block';
          } else {
              card.style.display = 'none';
          }
      });
  }
  </script>

  </body>

</html>
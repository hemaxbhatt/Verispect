<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.php" class="logo d-flex align-items-center me-auto">
      <img src="assets/img/favicon.png" alt="Verispect Logo">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php" <?php if($currentPage=='home'){echo 'class="active"';} ?>>Home</a></li>
        <li><a href="about.php" <?php if($currentPage=='about'){echo 'class="active"';} ?>>About Us</a></li>
        <li class="dropdown">
          <a href="services.php" <?php if($currentPage=='services'){echo 'class="active"';} ?>>
            <span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
          </a>
          <ul>
            <li><a href="services.php?service=general">General Pest Control</a></li>
            <li><a href="services.php?service=termite">Termite Treatment</a></li>
            <li><a href="services.php?service=rodent">Rodent Control</a></li>
            <li><a href="services.php?service=bedbug">Bed Bug Treatment</a></li>
            <li><a href="services.php?service=spider">Spider Extermination</a></li>
          </ul>
        </li>
        <li><a href="reviews.php" <?php if($currentPage=='reviews'){echo 'class="active"';} ?>>Reviews</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="contact.php" <?php if($currentPage=='contact'){echo 'class="active"';} ?>>Enquire Now</a>

  </div>
</header>
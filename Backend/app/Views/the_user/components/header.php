<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<header id="header" class="fixed-top d-flex align-items-center header-transparent entete">
  <div class="container-fluid">
    <div class="">
      <div class="h-100 w-100 d-flex flex-lg-column align-items-center justify-content-between">
        <div class="w-100 justify-content-lg-center align-items-center">
          <h1 class="logo">
            <a href="#" class="d-flex justify-content-start justify-content-lg-center align-items-center">
              <img src="assets/img/favicon_io/logo-asunicaco.png" width="53" heigth="53" alt="Funda">
              <span>ASUNICACO</span>
            </a>
          </h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul class="justify-content-lg-center align-items-lg-center">
            <li><a class="nav-link <?= $current_page == '' ? 'active' : '' ?>" href="/Asunicaco/public/">Accueil</a></li>
            <li><a class="nav-link <?= $current_page == 'actualites' ? 'active' : '' ?>" href="/Asunicaco/public/actualites">Actualités</a></li>
            <li><a class="nav-link <?= $current_page == 'provinces' ? 'active' : '' ?>" href="/Asunicaco/public/provinces">Provinces</a></li>
            <li><a class="nav-link <?= $current_page == 'apropos' ? 'active' : '' ?>" href="/Asunicaco/public/apropos">Apropos</a></li>
            <li><a class="nav-link <?= $current_page == 'contact' ? 'active' : '' ?>" href="/Asunicaco/public/contact">Contact</a></li>
          </ul>

          <div class="d-block d-lg-none justify-content-end">
            <i class="bi bi-list mobile-nav-toggle"></i>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
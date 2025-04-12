<?php
  $current_page = basename($_SERVER['REQUEST_URI']);
?>

<header id="header" class="fixed-top d-flex align-items-center header-transparent entete">
    <div class="container-fluid">
        <div class="">
            <div class="align-items-center justify-content-between entete">
                <div class="justify-content-center align-items-center">
                    <h1 class="logo">
                        <a href="#">
                            <img src="assets/img/favicon_io/logo-asunicaco.png" width="53" heigth="53" alt="Funda"> 
                            <span>ASUNICACO</span>
                        </a>
                    </h1>
                </div>
                <nav id="navbar" class="navbar">
                    <ul class="justify-content-center align-items-center">
                    <li><a class="nav-link <?= $current_page == '' ? 'active' : '' ?>" href="/Asunicaco/public/">Accueil</a></li>
                        <li><a class="nav-link <?= $current_page == 'actualites' ? 'active' : '' ?>" href="/Asunicaco/public/actualites">Actualités</a></li>
                        <li><a class="nav-link <?= $current_page == 'provinces' ? 'active' : '' ?>" href="/Asunicaco/public/provinces">Provinces</a></li>
                        <li><a class="nav-link <?= $current_page == 'apropos' ? 'active' : '' ?>" href="/Asunicaco/public/apropos">Apropos</a></li>
                        <li><a class="nav-link <?= $current_page == 'contact' ? 'active' : '' ?>" href="/Asunicaco/public/contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>

    </div>
</header>

<!-- <div class="col-xl-11">
  <div class="d-flex justify-content-between align-items-center entete">
    <h1 class="logo m-0">
      <a href="#">
        <img src="assets/img/favicon_io/logo-asunicaco.png" width="53" height="53" alt="Funda"> 
        <span>ASUNICACO</span>
      </a>
    </h1>
    <nav id="navbar" class="navbar">
    <ul class="justify-content-center align-items-center">
                        <li><a class="nav-link" href="/Asunicaco/public/">Accueil</a></li>
                        <li><a class="nav-link" href="/Asunicaco/public/actualites">Actualités</a></li>
                        <li><a class="nav-link scrollto" href="/Asunicaco/public/provinces">Provinces</a></li>
                        <li><a class="" href="/Asunicaco/public/apropos">Apropos</a></li>
                        <li><a class="nav-link" href="/Asunicaco/public/contact">Contact</a></li>
                    </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</div> -->

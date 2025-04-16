<section id="hero">
  <div class="hero-container">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <!-- Bloc de texte centré -->
        <div class="col-md-6 hero-text">
          <h2>Ensemble, pour un savoir qui transforme</h2>
        </div>
        <!-- Image positionnée légèrement en dessous à gauche -->
        <div class="col-md-6 text-center">
          <div class="img-illustration">
            <img src="assets/img/back.png" alt="img-illustration" class="hero-image">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<main id="main">
  <section id="about" class="section-bg">
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center about-col">

        <!-- Bloc de description avec espacement et marges -->
        <div class="col-md-6 description text-center text-md-start">
          <h4 class="about-title">
            Association des Universités et Instituts Supérieurs Catholiques du Congo.
          </h4>
          <p class="about-text">
            L'Association des Universités et Instituts Supérieurs Catholiques du Congo (ASUNICACO) rassemble les établissements d'enseignement supérieur reconnus à la fois par le Ministère de l’Enseignement Supérieur et Universitaire (ESU) et par l’Église catholique en République Démocratique du Congo. Ses statuts sont officiellement validés par la Conférence Épiscopale du Congo ainsi que par l’État congolais.
          </p>
        </div>

        <!-- Bloc Image positionné avec centrage -->
        <div class="col-md-6 text-center">
          <div class="about-img-container">
            <img src="assets/img/1.jpg" alt="about-img" class="about-img">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ======= Actualités ======= -->
  <section id="portfolio">
    <div class="container" data-aos="fade-up">
      <header class="section-header" id="Actualités">
        <h3 class="section-title">A la une</h3>
      </header>

      <p>
<?php if (!empty($news)): ?>
    <ul>
        <?php foreach ($news as $item): ?>
            <li><?= esc($item['title']) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucune actualité disponible.</p>
<?php endif; ?>

      </p>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- Actualité 1 -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-reseau">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/1.jpg" class="img-fluid" alt="Actualité 1" width="500" height="600">
            </figure>
            <div class="portfolio-info">
              <h4><a href="#">Actualité 1</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio nemo tempore atque temporibus officiis!</p>
              <span class="date">26 Mars 2025</span>
              <a href="#" class="btn-more">Lire</a>
            </div>
          </div>
        </div>

        <!-- Actualité 2 -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-reseau">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/1.jpg" class="img-fluid" alt="Actualité 2" width="500" height="600">
            </figure>
            <div class="portfolio-info">
              <h4><a href="#">Actualité 2</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio nemo tempore atque temporibus officiis!</p>
              <span class="date">25 Mars 2025</span>
              <a href="#" class="btn-more">Lire</a>
            </div>
          </div>
        </div>

        <!-- Actualité 3 -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-reseau">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/1.jpg" class="img-fluid" alt="Actualité 3" width="500" height="600">
            </figure>
            <div class="portfolio-info">
              <h4><a href="#">Actualité 3</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio nemo tempore atque temporibus officiis!</p>
              <span class="date">24 Mars 2025</span>
              <a href="#" class="btn-more">Lire</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row centre">
        <div class="col-md-12 text-center">
          <a href="#" class="modal-btn" id="modal-btn">Voir plus d'actualités</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Provinces ======= -->
  <section id="province">
    <div class="container" data-aos="fade-up">
      <header class="section-header" id="prov">
        <h3 class="section-title">Différentes provinces</h3>
      </header>

      <div id="list-province" class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 province-card">
          <div class="card-content">
            <h4>Katanga</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 province-card">
          <div class="card-content">
            <h4>Kinshasa</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 province-card">
          <div class="card-content">
            <h4>Kisangani</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 province-card">
          <div class="card-content">
            <h4>Tanganyika</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 province-card">
          <div class="card-content">
            <h4>Sud kivu</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 province-card">
          <div class="card-content">
            <h4>Nord Kivu</h4>
            <p>8 Institutions</p>
            <div class="icon-box">
              <i class="bi bi-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Our Clients Section ======= -->
  <section id="universite">
    <div class="container" data-aos="zoom-in" id="Provinces">
      <div class="row">
        <div class="col-lg-4">
          <header class="section-header">
            <h3><span class="section-title">Universités<br> Membres</span></h3>
          </header>
        </div>
        <div class="col-lg-8">
          <div class="universite-slider">
            <div class="swiper-wrapper align-items-center justify-content-center">
              <div class="universite-card ">
                <a href="#" target="_blank">
                  <img src="assets/img/logo-université/LOGO-UDBL1.webp" class="img-fluid" alt="Université UDBL" width="150" heigth="100">
                </a>
              </div>
              <!-- Université 2 -->
              <div class="universite-card ">
                <a href="#" target="_blank">
                  <img src="assets/img/logo-université/Malkia.webp" class="img-fluid" alt="Université Malkia" width="80" heigth="30">
                </a>
              </div>
              <!-- Université 3 -->
              <div class="universite-card ">
                <a href="#" target="_blank">
                  <img src="assets/img/logo-université/ISAM.webp" class="img-fluid" alt="Université ISAM" width="50" heigth="30">
                </a>
              </div>
              <!-- Université 4 -->
              <div class="universite-card ">
                <a href="#" target="_blank">
                  <img src="assets/img/logo-université/Istm.webp" class="img-fluid" alt="Université Zawadi" width="80" heigth="50">
                </a>
              </div>
              <!-- Université 5 -->
              <div class="universite-card ">
                <a href="#" target="_blank">
                  <img src="assets/img/logo-université/ucb.webp" class="img-fluid" alt="Université UCB" width="60" heigth="50">
                </a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
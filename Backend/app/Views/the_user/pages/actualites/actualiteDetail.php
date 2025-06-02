<!-- ======= Hero Section Actualités ======= -->

<?php
  extract($data)
?>
  <section class="hero-section position-relative d-flex pt-5 align-items-center justify-content-center text-white" style="background-image: url('<?= base_url()?>/assets/img/actualités/<?= esc($actu['image']) ?>'); background-size: cover; background-position: center; height: 80vh;">
  <div
    class="position-absolute top-0 start-0 w-100 h-100"
    style="background-color: rgba(0,0,0,0.5);">
  </div>

  <div class="container position-relative z-2 text-center">
    <h1 class="*display-6 fw-bold"><?= esc($actu['title']) ?></h1>
    <!-- <p class="lead">Restez informé des dernières nouvelles de l'ASUNICACO</p> -->
  </div>
</section>

<section class="mb-4">
  <div class="container">
    <!-- Fil d'Ariane -->
    <div class="my-3">
      <small><a href="<?= base_url()?>/actualite" style="color: #2952A1;">Accueil</a> / <span style="color: black;">Actualités</span></small>

      <hr>
    </div>

    <section class="actualite-detail row py-4 g-4">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-2"><?= esc($actu['title']) ?></h2>
        <p class="lead text-muted mb-2">
          <?= esc($actu['summary']) ?>
        </p>
        <p class="text-muted"><small>Publié le <?= date('d M Y', strtotime($actu['publish_date'])) ?></small> <br>
        <a href="<?= esc($actu['website']) ?>" target="_blank"> <?= esc($actu['university']) ?></a>
      </p>

        <img src="<?= base_url()?>/assets/img/actualités/<?= esc($actu['image']) ?>" alt="<?= esc($actu['title']) ?>" class="img-fluid rounded my-4">

        <div class="row">
          <div class="w-100">
            <p>
              <?=
              $actu['content']
              ?>
            </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="">
          <h5 class="fw-bold mb-3">Actualités Récentes</h5>
          <ul class="list-unstyled">
            <?php foreach ($othersnews as $actu): ?>
            <li class="mb-3">
              <a href="/Asunicaco/public/actualiteDetail/<?= esc($actu['id_news']) ?>" class="fw-semibold text-decoration-none" style="color: #2952A1;"><?= esc($actu['title']) ?></a>
              <!-- <p class="small text-muted mb-0">Un nouveau programme d’échange permet aux étudiants...</p> -->
              <hr>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
  </div>
  </div>
</section>
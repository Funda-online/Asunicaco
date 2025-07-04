<div class="container pt-5 mt-5">
  <div class="mt-3">
    <small>
      <a href="index.php" style="color: #2952A1;">Accueil</a> /
      <a href="#" style="color: #2952A1">Provinces</a> /
      <span style="color: black;">Université</span>
    </small>
    <hr>
  </div>

  <?php if (isset($data['universite']) && !empty($data['universite'])):
    extract($data); ?>

    <!-- Bloc principal -->
    <div class="row mb-4">
      <div class="col-md-8">

        <!-- Logo + Titre -->
        <div class="d-flex align-items-center mb-4">
          <?php if (!empty($universite['logo'])): ?>
            <img src="<?= base_url('assets/img/logo-universite/' . $universite['logo']) ?>"
              alt="Logo <?= esc($universite['name']) ?>"
              class=""
              style="width: 80px; height: 80px; object-fit: contain;">
          <?php endif; ?>
          <h2 class="mb-0 fw-bold" style="color: #2952A1;"><?= esc($universite['name']) ?></h2>
        </div>

     

        <!-- Carrousel (sous la description) -->
        <?php
        if (!empty($universite['images'])):
          $images = json_decode($universite['images'], true);
          if (!empty($images) && is_array($images)):
        ?>
          <div class="mt-5">
            <div id="carouselUniversite" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php foreach ($images as $index => $image): ?>
                  <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= base_url('assets/img/universites/' . $image) ?>" class="d-block w-100 rounded"
                      alt="Image Université <?= $index + 1 ?>"
                      style="max-height: 500px; object-fit: cover;">
                  </div>
                <?php endforeach; ?>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselUniversite" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselUniversite" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
              </button>
            </div>
          </div>
        <?php endif; endif; ?>

           <!-- Description -->
        <?php if (!empty($universite['description'])): ?>
          <div class="mb-5">
            <?= $universite['description'] ?>
          </div>
        <?php endif; ?>

      </div>

      <!-- Carte infos (colonne droite) -->
      <div class="col-md-4">
        <div class="card border-0">
          <div class="card-body">
            <?php if (!empty($universite['logo'])): ?>
              <img src="<?= base_url('assets/img/logo-universite/' . $universite['logo']) ?>"
                alt="<?= $universite['name'] ?>" class="me-3 mb-2" style="width: 40px;">
            <?php endif; ?>
            <h5 class="card-title"><strong><?= esc($universite['name']) ?></strong></h5>

            <?php if (!empty($universite['address'])): ?>
              <p class="mb-1"><i class="bi bi-geo-alt-fill me-1"></i> <?= esc($universite['address']) ?></p>
            <?php endif; ?>
            <?php if (!empty($universite['phone'])): ?>
              <p class="mb-1"><i class="bi bi-telephone-fill me-1"></i> <?= esc($universite['phone']) ?></p>
            <?php endif; ?>
            <?php if (!empty($universite['email'])): ?>
              <p class="mb-1"><i class="bi bi-envelope-fill me-1"></i> <?= esc($universite['email']) ?></p>
            <?php endif; ?>
            <?php if (!empty($universite['website'])): ?>
              <p class="mb-1">
                <i class="bi bi-globe me-1"></i>
                <a href="<?= esc($universite['website']) ?>" target="_blank" class="text-decoration-none">
                  <?= esc($universite['website']) ?>
                </a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

  <?php else: ?>
    <p>Cette université n'existe pas.</p>
  <?php endif; ?>
</div>

<div class="container pt-5 mt-5">
  <div class="mt-3">
    <small><a href="index.php" style="color: #2952A1;">Accueil</a> / <a href="#" style="color: #2952A1">Provinces</a> / <span style="color: black;">Université</span></small>
    <hr>
  </div>

  <?php if (isset($data['universite']) && !empty($data['universite'])) :
        extract($data);
      ?>
      <!-- hero section-->
      <div class="row mb-4">
        <div class="col-md-8">
          <img src="<?= base_url()?>/assets/img/universite-page/1.jpg" class="*img-fluid" style="width: 100%; height: 400px; object-fit: cover;" alt="Université Don Bosco">
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <div class="mb-3">
                <img src="<?= base_url()?>/assets/img/logo-université/LOGO-UDBL2.jpg" alt="Logo UDBL" class="me-3 mb-2" style="width: 40px;">
                <div>
                  <h5 class="card-title"><strong> <?= esc($universite['name']) ?> </strong></h5>
                </div>
              </div>
                <?php if (!empty($universite['address'])) :  ?>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> <?= esc($universite['address'])?></p>
                <?php endif; ?>

                <?php if (!empty($universite['phone'])) :  ?>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> <?= esc($universite['phone'])?></p>
                <?php endif; ?>

                <?php if (!empty($universite['email'])) :  ?>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> <?= esc($universite['email'])?></p>
                <?php endif; ?>

                <?php if (!empty($universite['website'])) :  ?>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> <?= esc($universite['website'])?></p>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Titre -->
      <div class="d-flex align-items-center g-4 mb-4">
        <img src="<?= base_url()?>/assets/img/logo-université/LOGO-UDBL2.jpg" alt="Logo UDBL" class="me-3" style="width: 80px;">
        <div>
          <h2 class="mt-3 fw-bold" style="color: #2952A1"><?= esc($universite['name']) ?></h2>
        </div>
      </div>

      <!-- Informations générales -->
      <div class="">
        <h5 class="mb-3" style="color: #2952A1">Informations générales sur l’université</h5>
        <p>L’Université Don Bosco de Lubumbashi est un établissement d’enseignement supérieur et universitaire privé catholique des salésiens de Don Bosco de la province Maria Assunta de l’Afrique Centrale ; née de la fusion des instituts et écoles supérieurs :</p>
        <ul>
          <li>École Supérieure d’Informatique Salama (ESIS)</li>
          <li>École Supérieure de Gouvernance Politique et Économique (ECOPO)</li>
          <li>Institut Supérieur de Philosophie Saint Jean Bosco (ISPh)</li>
          <li>Institut de Théologie Saint François de Sales (ITSFS)</li>
        </ul>
        <p>La vision de l’UDBL est de répondre aux enjeux de société, tant en formation qu’en recherche, par la mise en commun des compétences de haut niveau et le rayonnement de l’excellence qu’elle propose.</p>
      </div>

      <!-- Facultés -->
      <div class="mb-5">
        <h5 class="mb-3" style="color: #2952A1">Facultés organisées</h5>
        <ul>
          <li>Faculté des Sciences Informatiques</li>
          <li>Faculté de Gestion et Ingénierie Financière</li>
          <li>Faculté des Sciences de l’Homme et de la Société</li>
          <li>Faculté de Théologie</li>
        </ul>
      </div>

      <!-- Galerie -->
      <div class="mb-5">
        <h5 class="mb-3" style="color: #2952A1">Gallerie</h5>
        <div class="row g-3">
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 1">
          </div>
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 2">
          </div>
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 3">
          </div>
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 4">
          </div>
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 5">
          </div>
          <div class="col-6 col-md-4">
            <img src="<?= base_url()?>/assets/img/1.jpg" class="img-fluid" alt="Galerie 6">
          </div>
        </div>
      </div>
  <?php else: ?>
      <p>Cette université n'existe pas.</p>
  <?php endif; ?>
</div>
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
           <div class="d-flex align-items-center g-4 mb-4">
              <?php if (!empty($universite['logo'])) :  ?>
                <img src="<?= $universite['logo']?>" alt="Logo UDBL" class="me-3" style="width: 80px;">
              <?php endif; ?>
              <div>
                <h2 class="mt-3 fw-bold" style="color: #2952A1"><?= esc($universite['name']) ?></h2>
              </div>
            </div>
            <div class="mb-5">
              <?php if (!empty($universite['description'])) :  ?>
                          <?= esc($universite['description'])?>
              <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <div class="mb-3">
                <?php if (!empty($universite['logo'])) :  ?>
                  <img src="<?= $universite['logo']?>" alt="Logo UDBL" class="me-3 mb-2" style="width: 40px;">
                <?php endif; ?>
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
     
  <?php else: ?>
      <p>Cette université n'existe pas.</p>
  <?php endif; ?>
</div>
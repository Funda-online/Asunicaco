<section class="container py-5 mt-5" id="sec-province">
  <div class="my-3">
    <!-- <small><a href="#">Accueil</a> / À propos</small> -->
    <small><a href="index.php" style="color: #2952A1;">Accueil</a> / <span style="color: black;">Provinces</span></small>

    <hr>
  </div>

  <p class="fs-5 about-title">
    ASUNICACO est présente dans plusieurs provinces de la RDC à travers ses universités et instituts supérieurs membres. Chaque implantation contribue à la mission éducative de l’Église et au développement local.
  </p>

  <div class="row mt-4">
    <!-- Sidebar -->
    <div class="col-md-3">

      <!-- <h5 class="fst-italic pb-2">Provinces couvertes</h5> -->
      <div class="list-group" id="list-tab" role="tablist">
        <?php if (isset($data['provinces']) && !empty($data['provinces'])) : ?>
          <?php
          $i = 0;
          foreach ($data['provinces'] as $province) : ?>
            <a class="list-group-item list-group-item-action <?= $i == 0 ? 'active' : '' ?>" id="province-<?= esc($province['id_province']) ?>-list" data-bs-toggle="list" href="#province-<?= esc($province['id_province']) ?>" role="tab" aria-controls="province-<?= esc($province['id_province']) ?>"><?= esc($province['name']) ?></a>
          <?php
            $i++;
          endforeach; ?>
        <?php else: ?>
          <p>Aucune province disponible.</p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Main content -->
    <div class="col-md-9">
      <!-- Intro Section -->
      <div class="tab-content" id="nav-tabContent-province">

        <?php if (isset($data['provinces']) && !empty($data['provinces'])) : ?>
          <?php
          $j = 0;
          foreach ($data['provinces'] as $province) : ?>

            <div class="tab-pane fade show <?= $j == 0 ? 'active' : '' ?>" id="province-<?= esc($province['id_province']) ?>" role="tabpanel" aria-labelledby="province-<?= esc($province['id_province']) ?>-list">
              <div class="d-md-flex mb-4 mt-4 mt-md-0">
                <div class="mt-4 mt-md-0">
                  <h4>
                    <?= esc($province['name']) ?>
                  </h4>
                </div>
              </div>

              <!-- Informations générales -->
              <!-- Informations générales -->

              <div class="mb-4">
                <?php if (!empty($province['phone']) || !empty($province['address'])) : ?>
                <h5 style="color: #2952A1;">Informations générales</h5>
                <p><strong>Siège provincial :</strong><?= esc($province['address']) ?> <br>
                  <strong>Téléphone :</strong> <?= esc($province['phone']) ?>
                </p>
                <?php endif;?>
                <!-- <p><strong>Adresse e-mail :</strong> <a href="mailto:kin@asunicaco.cd">kin@asunicaco.cd</a></p> -->
              </div>

              <!-- Comité de gestion -->
              <?php if (!empty($province['description'])) : ?>
                <div class="mb-4">
                  <h5 style="color: #2952A1;">Présentation</h5>
                  <?= esc($province['description']) ?>
                </div>
              <?php endif; ?>

              <!-- Universités membres -->
              <div class="mb-4">
                <h5 style="color: #2952A1;">Universités membres</h5>
                <div class="table-responsive mt-3">
                  <?php if (isset($data['universites']) && !empty($data['universites'])) : ?>
                    <table class="table table-bordered">
                      <thead class="table-light">
                        <tr>
                          <th>Nom de l’établissement</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 0;
                        foreach ($data['universites'] as $universite) :
                          if ($universite['id_province'] == $province['id_province']) :
                        ?>
                            <tr>
                              <td>
                                <?php if (!empty($universite['website'])) :  ?>
                                  <a href="<?= esc($universite['website']) ?>" target="_blank">
                                    <?= esc($universite['name']) ?>
                                  </a>
                                <?php else : ?>
                                  <?= esc($universite['name']) ?>
                                <?php endif; ?>
                              </td>
                              <!-- <td>Kinshasa</td> -->
                            </tr>
                          <?php endif; ?>
                        <?php
                          $i++;
                        endforeach; ?>
                      </tbody>
                    </table>
                  <?php else: ?>
                    <p>Aucune université disponible.</p>
                  <?php endif; ?>
                </div>
              </div>

              <!-- derniere actualites -->
               <?php if (isset($actualites)):?>
                <div class="col-md-12">
                  <h5 style="color: #2952A1;">Actualités Récentes</h5>
                  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php
                    extract($data);
                    foreach ($actualites as $actu) : ?>
                      <div class="col g-4">
                        <div class="h-100">
                          <img src="<?= base_url('assets/img/actualites/' . esc($actu['image'])) ?>" class="card-img-top" alt="...">
                          <div class="pt-4">
                            <h5 class="card-title"><?= esc($actu['title']) ?></h5>
                            <p class="py-2 m-0"><small class="text-muted"><?= date('d M Y', strtotime($actu['publish_date'])) ?></small></p>
                            <a href="/Asunicaco/public/actualiteDetail/<?= esc($actu['id_news']) ?>" class="btn btn-sm btn-custom">Lire</a>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                
                </div>
              </div>
              <?php endif; ?>
            </div>

          <?php
            $j++;
          endforeach; ?>
        <?php else: ?>
          <p>Aucune province disponible.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
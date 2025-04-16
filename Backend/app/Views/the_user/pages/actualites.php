<!-- ======= Hero Section Actualités ======= -->
<section class="hero-section position-relative d-flex align-items-center justify-content-center text-white"
  style="background-image: url('assets/img/actualités/act1.jpg'); background-size: cover; background-position: center; height: 80vh;">

  <div
    class="position-absolute top-0 start-0 w-100 h-100"
    style="background-color: rgba(0,0,0,0.5);">
  </div>

  <!-- Contenu centré -->
  <div class="container position-relative z-2 text-center">
    <h1 class="display-6 fw-bold">Actualités</h1>
    <p class="lead">Restez informé des dernières nouvelles de l'ASUNICACO</p>
  </div>
</section>

<section class="mb-4" data-aos="fade-up">
  <div class="container">
    <!-- Fil d'Ariane -->
    <div class="my-3">
      <small><a href="index.php">Accueil</a> / Actualités</small>

      <hr>
    </div>

    <h2 class="my-4">Actualités</h2>

    <div class="row">
      <!-- Filtres -->
      <div class="col-md-3 mb-4">
        <h5>Filtrer les actualités</h5>
        <form method="GET" action="actualites.php">
          <div class="mb-3">
            <label for="motcle" class="form-label">Mot-clé</label>
            <input type="text" class="form-control" name="motcle" id="motcle">
          </div>
          <div class="mb-3">
            <label for="theme" class="form-label">Thème</label>
            <select class="form-select" name="theme" id="theme">
              <option value="">Tout</option>
              <option value="enseignement">Enseignement</option>
              <option value="échange">Échange</option>
              <option value="visite">Visite</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date_debut" class="form-label">Date début</label>
            <input type="date" class="form-control" name="date_debut" id="date_debut">
          </div>
          <div class="mb-3">
            <label for="date_fin" class="form-label">Date fin</label>
            <input type="date" class="form-control" name="date_fin" id="date_fin">
          </div>
          <button type="submit" class="btn btn-custom w-100">Appliquer</button>
        </form>
      </div>

      <!-- Actualités -->
      <div class="col-md-9">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php
          $actualites = [
            [
              "image" => "assets/img/1.jpg",
              "titre" => "Conférence sur l’enseignement catholique et les enjeux contemporains",
              "date" => "11 Avril 2025",
              "resume" => "Des experts se sont penchés sur les défis éthiques, sociaux et technologiques...",
            ],
            [
              "image" => "assets/img/1.jpg",
              "titre" => "Lancement d’un programme d’échange interuniversitaire",
              "date" => "10 Avril 2025",
              "resume" => "Un nouveau programme d’échange permet aux étudiants de circuler entre les établissements membres...",
            ],
            [
              "image" => "assets/img/1.jpg",
              "titre" => "Lancement d’un programme d’échange interuniversitaire",
              "date" => "10 Avril 2025",
              "resume" => "Un nouveau programme d’échange permet aux étudiants de circuler entre les établissements membres...",
            ],
            [
              "image" => "assets/img/1.jpg",
              "titre" => "Lancement d’un programme d’échange interuniversitaire",
              "date" => "10 Avril 2025",
              "resume" => "Un nouveau programme d’échange permet aux étudiants de circuler entre les établissements membres...",
            ],
          ];

          foreach ($actualites as $actu) {
            echo '
            <div class="col g-4">
              <div class="h-100">
                <img src="' . $actu['image'] . '" class="card-img-top" alt="...">
                <div class="pt-4">
                  <h5 class="card-title">' . $actu['titre'] . '</h5>
                  <p class="py-2 m-0"><small class="text-muted">' . $actu['date'] . '</small></p>
                  <p class="py-2 m-0">' . $actu['resume'] . '</p>
                  <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-sm btn-custom">Lire</a>
                </div>
              </div>
            </div>';
          }

          //   foreach ($actualites as $key => $actu) {
          //     echo '
          //     <div class="col g-4">
          //       <div class="h-100">
          //         <img src="' . $actu['image'] . '" class="card-img-top" alt="...">
          //         <div class="pt-4">
          //           <h5 class="card-title">' . $actu['titre'] . '</h5>
          //           <p class="py-2 m-0"><small class="text-muted">' . $actu['date'] . '</small></p>
          //           <p class="py-2 m-0">' . $actu['resume'] . '</p>
          //           <a href="actualite-detail.php?id=' . $key . '" class="btn btn-sm btn-custom">Lire</a>
          //         </div>
          //       </div>
          //     </div>';
          // }        
          ?>
        </div>

        <!-- Pagination -->
        <nav class="mt-5">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
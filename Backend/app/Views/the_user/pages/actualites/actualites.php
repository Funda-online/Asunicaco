<!-- ======= Hero Section Actualités ======= -->
<section id="heroCarousel" class="position-relative pt-5">

  <div class="carousel slide" data-bs-ride="carousel">
    <!-- <div class="carousel-inner">

      
      <div class="carousel-item active">
        <div class="hero-slide position-relative d-flex align-items-center justify-content-center text-white"
          style="background-image: url('assets/img/actualités/act1.jpg'); background-size: cover; background-position: center; height: 80vh;">

          <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

          <div class="container position-relative z-2 text-center">
            <h1 class="display-6">Rencontre annuelle des recteurs des universités catholiques</h1>
            <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-light mt-3">Lire plus...</a>
          </div>
        </div>
      </div>

      
      <div class="carousel-item">
        <div class="hero-slide position-relative d-flex align-items-center justify-content-center text-white"
          style="background-image: url('assets/img/actualités/act2.jpg'); background-size: cover; background-position: center; height: 80vh;">

          <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

          <div class="container position-relative z-2 text-center">
            <h1 class="display-6 *fw-bold">Conférence sur l’enseignement catholique</h1>
            <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-light mt-3">Lire plus...</a>
          </div>
        </div>
      </div>

      
      <div class="carousel-item">
        <div class="hero-slide position-relative d-flex align-items-center justify-content-center text-white"
          style="background-image: url('assets/img/actualités/act3.jpg'); background-size: cover; background-position: center; height: 80vh;">

          <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

          <div class="container position-relative z-2 text-center">
            <h1 class="display-6 *fw-bold">Programme d’échange interuniversitaire</h1>
            <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-light mt-3">Lire plus...</a>
          </div>
        </div>
      </div>

    </div> -->

    <div class="carousel-inner">
      <?php foreach ($lastThree as $index => $news): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
          <div class="hero-slide position-relative d-flex align-items-center justify-content-center text-white"
            style="background-image: url('assets/img/actualités/<?= esc($news['image']) ?>'); background-size: cover; background-position: center; height: 80vh;">

            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

            <div class="container position-relative z-2 text-center">
              <h1 class="display-6"><?= esc($news['title']) ?></h1>
              <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-light mt-3">Lire plus...</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>


    <!-- Indicateurs (les 3 points) 
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> 
    -->

    <div class="carousel-indicators">
      <?php foreach ($lastThree as $index => $news): ?>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $index ?>"
          class="<?= $index === 0 ? 'active' : '' ?>" <?= $index === 0 ? 'aria-current="true"' : '' ?>
          aria-label="Slide <?= $index + 1 ?>"></button>
      <?php endforeach; ?>
    </div>


  </div>
</section>


<section class="mb-4">
  <div class="container">
    <!-- Fil d'Ariane -->
    <div class="my-3">
      <small><a href="index.php" style="color: #2952A1;">Accueil</a> / <span style="color: black;">Actualités</span></small>

      <hr>
    </div>

    <h2 class="my-4">Actualités</h2>

    <div class="row">
      <!-- Filtres -->
      <!-- <div class="col-md-3 mb-4">
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
      </div> -->

      <!-- Actualités -->
      <div class="col-md-12">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <?php if (!empty($allNews)): ?>
            <?php foreach ($allNews as $actu): ?>
              <div class="col g-4">
                <div class="h-100">
                  <img src="<?= base_url('assets/img/actualités/' . esc($actu['image'])) ?>" class="card-img-top" alt="..." style="height: 230px; object-fit:cover">
                  <div class="pt-4">
                    <h5 class="card-title"><?= esc($actu['title']) ?></h5>
                    <p class="py-2 m-0"><small class="text-muted"><?= date('d M Y', strtotime($actu['publish_date'])) ?></small></p>
                    <p class="py-2 m-0"><?= esc($actu['summary']) ?></p>
                    <a href="/Asunicaco/public/actualiteDetail/" class="btn btn-sm btn-custom">Lire</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Aucune actualité pour le moment.</p>
          <?php endif; ?>
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
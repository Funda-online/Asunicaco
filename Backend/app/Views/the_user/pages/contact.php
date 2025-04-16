<!-- ======= Hero Section Contact ======= -->
<section class="*hero-section position-relative d-flex align-items-center justify-content-center text-white" style="background-image: url('assets/img/contact-bg.jpg'); background-size: cover; background-position: center; height: 80vh;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

  <div class="container position-relative z-2 text-center">
    <h1 class="display-4 fw-bold">Contactez-nous</h1>
    <p class="lead">Nous sommes là pour répondre à toutes vos questions</p>
  </div>
</section>

<!-- ======= Contact Section ======= -->
<section class="contact mb-5">
  <div class="container">

    <div class="my-3">
      <small><a href="index.php">Accueil</a> / Contact</small>
      <hr>
    </div>

    <div class="section-title text-center mb-5">
      <p>N'hésitez pas à nous envoyer un message ou à venir nous voir en personne.</p>
    </div>

    <div class="col">
      <!-- Infos de contact -->
      <div class="col-lg-6 d-flex flex-column w-100 justify-content-between mb-5">
        <div class="info w-100 mb-4">
          <div class="mb-4 d-flex align-items-center gap-3">
            <i class="bi bi-geo-alt fs-3"></i>
            <div>
              <h4>Adresse:</h4>
              <p class="mb-0">Lubumbashi, République Démocratique du Congo</p>
            </div>
          </div>

          <div class="mb-4 d-flex align-items-center gap-3">
            <i class="bi bi-envelope fs-3"></i>
            <div>
              <h4>Email:</h4>
              <p class="mb-0">info@asunicaco.com</p>
            </div>
          </div>

          <div class="mb-4 d-flex align-items-center gap-3">
            <i class="bi bi-phone fs-3"></i>
            <div>
              <h4>Téléphone:</h4>
              <p class="mb-0">+243 000 000 000</p>
            </div>
          </div>
        </div>

        <!-- Carte Google Maps -->
        <div class="mt-auto">
        <iframe
          src="https://maps.google.com/maps?q=Lubumbashi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0"
          allowfullscreen
          class="w-100 rounded-3"
          style="height: 290px; border: 0;">
        </iframe>
        </div>
      </div>

      <!-- Formulaire de contact -->
      <div class="col-lg-6 mt-5 mt-lg-0 d-flex w-100">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Votre nom <span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Votre email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="subject">Sujet <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="message">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" name="message" rows="8" required></textarea>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-custom px-4 py-2 w-100">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

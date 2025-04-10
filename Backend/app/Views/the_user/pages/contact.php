<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: #37517e; color: white;">
  <div class="container text-center" data-aos="fade-up">
    <h1>Contactez-nous</h1>
    <h2>Nous sommes là pour répondre à toutes vos questions</h2>
  </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>N'hésitez pas à nous envoyer un message ou à venir nous voir en personne.</p>
    </div>

    <div class="row">

      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Adresse:</h4>
            <p>Kinshasa, République Démocratique du Congo</p>
          </div>

          <div class="email mt-4">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@asunicaco.org</p>
          </div>

          <div class="phone mt-4">
            <i class="bi bi-phone"></i>
            <h4>Téléphone:</h4>
            <p>+243 000 000 000</p>
          </div>

          <iframe src="https://maps.google.com/maps?q=Kinshasa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Votre nom</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Votre email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="subject">Sujet</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="8" required></textarea>
          </div>

          <div class="row centre">
            <div class="col-md-12 text-center">
              <a href="#" class="modal-btn" id="modal-btn">Envoyer</a>
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</section>
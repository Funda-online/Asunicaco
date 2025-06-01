<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= esc($title) ?></title>
    <!-- <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet"> -->

    <meta name="keywords" content="Association des Universités et Instituts Supérieurs Catholiques du Congo, ASUNICACO, établissements d'enseignement supérieur, enseignement supérieur catholique, République Démocratique du Congo, Ministère de l’Enseignement Supérieur et Universitaire, ESU, Église catholique, Conférence Épiscopale du Congo, universités catholiques, instituts supérieurs, congo, RDC">
    <meta property="og:title" content="Asunicaco">
    <meta property="og:description" content="Association des Universités et Instituts Supérieurs Catholiques du Congo : L'Association des Universités et Instituts Supérieurs Catholiques du Congo (ASUNICACO) rassemble les établissements d'enseignement supérieur reconnus à la fois par le Ministère de l’Enseignement Supérieur et Universitaire (ESU) et par l’Église catholique en République Démocratique du Congo. Ses statuts sont officiellement validés par la Conférence Épiscopale du Congo ainsi que par l’État congolais.">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/1.jpg">
    <meta property="og:image:width" content="5373">
    <meta property="og:image:height" content="3582">
    <meta property="og:image:alt" content="Asunicaco background image">
    <meta name="description" content="Association des Universités et Instituts Supérieurs Catholiques du Congo : L'Association des Universités et Instituts Supérieurs Catholiques du Congo (ASUNICACO) rassemble les établissements d'enseignement supérieur reconnus à la fois par le Ministère de l’Enseignement Supérieur et Universitaire (ESU) et par l’Église catholique en République Démocratique du Congo. Ses statuts sont officiellement validés par la Conférence Épiscopale du Congo ainsi que par l’État congolais.">

    <!-- Favicons -->
    <link href="<?= base_url()?>/assets/img/favicon_io/favicon.ico" rel="icon">
    <link href="<?= base_url()?>/assets/img/favicon_io/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url()?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?= view('the_user/components/header') ?>

    <main class="">
        <div class="">
            <?= view($content) ?>
        </div>
    </main>

    <?= view('the_user/components/footer') ?>

    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url()?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url()?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url()?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url()?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url()?>/assets/js/main.js"></script>
</body>

</html>
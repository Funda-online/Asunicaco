<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= esc($title) ?></title>
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
    <meta name="theme-color" content="#2952A1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-navbutton-color" content="#2952A1">

    <!-- Favicons -->
    <link href="assets/img/favicon_io/favicon.ico" rel="icon">
    <link href="assets/img/favicon_io/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?= view('the_user/components/header') ?>

    <main class="">
        <div class="">
            <?= view($content) ?>
        </div>
    </main>

    <?= view('the_user/components/footer') ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        const swiper = new Swiper('.universite-slider', {
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });
    </script>
</body>

</html>
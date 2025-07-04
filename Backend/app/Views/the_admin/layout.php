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

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?= base_url('assets/admin/css/sb-admin-2.css') ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?= view('the_admin/components/sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?= view('the_admin/components/header') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="">
          <?= view($content) ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <!-- <script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="<?= base_url()?>assets/admin/vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="<?= base_url()?>assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url()?>assets/admin/js/demo/chart-pie-demo.js"></script> -->

  <!-- jQuery (requis par Select2) -->


<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
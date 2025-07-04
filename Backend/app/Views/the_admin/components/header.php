<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <div class="d-flex g-1">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <img src="<?= base_url() ?>/assets/img/favicon_io/logo-asunicaco.png" width="48" heigth="48" alt="Funda">
      </div>
      <div class="sidebar-brand-text mx-3">ASUNICACO</div>
    </a>
  </div>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        <span class="d-none d-md-inline text-gray-900 mr-2">
          <?= session()->get('username') ?? 'Utilisateur' ?>
        </span>
        <i class="fas fa-user-circle fa-2x text-gray-600"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?= base_url('logout') ?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>

</nav>
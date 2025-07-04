<?php
$uri = uri_string();
$segments = explode('/', $uri);
$current_page = $segments[0];
?>

<ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar" style="background-color: #2952A1;">

  <div class="*pl-3">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item mt-3 <?= $current_page == 'dashboard' ? 'active *border-left' : '' ?>">
      <a class="nav-link" href=" <?= base_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span>
      </a>
    </li>

    <li class="nav-item <?= $current_page == 'adminUniversites' ? 'active' : '' ?>">
      <a class="nav-link" href=" <?= base_url('adminUniversites') ?>">
        <i class="fas fa-university"></i>
        <span>Universites</span>
      </a>
    </li>

    <!-- <li class="nav-item  <?= $current_page == 'adminProvinces' ? 'active' : '' ?>">
      <a class="nav-link" href=" <?= base_url('adminProvinces') ?>">
        <i class="fas fa-map"></i>
        <span>Provinces</span>
      </a>
    </li> -->


    <li class="nav-item  <?= $current_page == 'adminActualites' ? 'active' : '' ?>">
      <a class="nav-link" href=" <?= base_url('adminActualites') ?>">
        <i class="fas fa-newspaper"></i>
        <span>Actualités</span>
      </a>
    </li>
<!-- 
    <li class="nav-item  <?= $current_page == 'adminUsers' ? 'active' : '' ?>">
      <a class="nav-link" href=" <?= base_url('adminUsers') ?>">
        <i class="fas fa-users"></i>
        <span>Admin</span>
      </a>
    </li> -->
  </div>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CJ Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-desktop"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Menu Makanan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menumakan" aria-expanded="true" aria-controls="menumakan">
          <i class="fas fa-fw fa-list"></i>
          <span>Menu</span>
        </a>
        <div id="menumakan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="utilities-color.html">Shift 1</a>
            <a class="collapse-item" href="utilities-border.html">Shift 2</a>
            <a class="collapse-item" href="utilities-animation.html">Shift 3</a>
          </div>
        </div>
      </li>

      <!-- Hasil Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hasilmenu" aria-expanded="true" aria-controls="hasilmenu">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Hasil</span>
        </a>
        <div id="hasilmenu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Shift 1</a>
            <a class="collapse-item" href="utilities-border.html">Shift 2</a>
            <a class="collapse-item" href="utilities-animation.html">Shift 3</a>
          </div>
        </div>
      </li>

      <!-- Polling Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pollingmenu" aria-expanded="true" aria-controls="pollingmenu">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>Polling</span>
        </a>
        <div id="pollingmenu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Shift 1</a>
            <a class="collapse-item" href="utilities-border.html">Shift 2</a>
            <a class="collapse-item" href="utilities-animation.html">Shift 3</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Karyawan Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('listkaryawan') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Karyawan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-reply"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
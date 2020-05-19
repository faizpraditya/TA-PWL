<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Sewa Motor Aja</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url('login/setting') ?>">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/motor') ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Motor</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Login/pelanggan') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Pelanggan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/persewaan') ?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Persewaan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/setting') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Setting</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/logout') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
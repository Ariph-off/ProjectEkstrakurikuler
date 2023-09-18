<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Tambah Data
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('ekstra.create') }}">Ekstra</a>
                        <a class="dropdown-item" href="{{ route('pembina.create') }}">Pembina</a>
                        <a class="dropdown-item" href="{{ route('pelatih.create') }}">Pelatih</a>
                        <a class="dropdown-item" href="#">Pembali</a>
                        <a class="dropdown-item" href="#">Transaksi</a>
                        <a class="dropdown-item" href="#">Pembayaran</a>
                    </div>
                </div>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">EKSTRASMAKENSA</span>
      </a><br>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <li class="nav-item">
              <a href="{{route ('ekstra.index') }}" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-regular fa-users-line"></i>
                <p>Extra</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route ('pembina.index') }}" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-regular fa-users-line"></i>
                <p>Pembina</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route ('pelatih.index') }}" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-regular fa-users-line"></i>
                <p>Pelatih</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-light fa-calendar"></i>
                <p>Jadwal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class=" nav-icon fas fa-sharp fa-regular fa-right-from-bracket"></i>
                <p>logout</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
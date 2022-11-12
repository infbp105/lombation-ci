<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-trophy"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lombation</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <span style="font-family: 'Poppins';">Beranda</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profile') ?>">
    
            <span style="font-family: 'Poppins';">Profil</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dataset
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/table') ?>">
            <span style="font-family: 'Poppins';">Data Tabel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/charts') ?>">
            <span style="font-family: 'Poppins';">Charts</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data_api') ?>">

            <span style="font-family: 'Poppins';">API Dokumen</span>
        </a>
    </li>


    <!-- Divider -->
    <!-- Nav Item - Charts -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
    
            <h6 class="btn btn-warning" style="font-family: 'Poppins';">Logout</h6>
        </a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->

</ul>
<!-- End of Sidebar -->
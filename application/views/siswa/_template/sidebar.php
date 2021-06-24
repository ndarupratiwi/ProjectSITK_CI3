<!-- Sidebar -->
<ul class="navbar-nav bg-warning sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TK PELITA HARAPAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('siswa/index') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="font-weight-bold">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('siswa/pendaftaran') ?>">
            <i class="fas fa-file-invoice"></i>
            <span class="font-weight-bold">Pendaftaran</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pembayaran" aria-expanded="true" aria-controls="pembayaran">
            <i class="fas fa-money-check-alt"></i>
            <span class="font-weight-bold">Pembayaran</span>
        </a>
        <div id="pembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item font-weight-bold" href="<?php echo site_url('siswa/upload_pembayaran') ?>">Upload Bukti Pembayaran</a>
                <a class="collapse-item font-weight-bold" href="<?php echo site_url('siswa/konfirm_pembayaran') ?>">Konfirmasi Pembayaran</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('siswa/biodata') ?>">
            <i class="fas fa-clipboard-list"></i>
            <span class="font-weight-bold">Biodata</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#akademik" aria-expanded="true" aria-controls="akademik">
            <i class="fas fa-money-check-alt"></i>
            <span class="font-weight-bold">Akademik</span>
        </a>
        <div id="akademik" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item font-weight-bold" href="<?php echo site_url('siswa/exercise_siswa') ?>">Pembelajaran</a>
                <a class="collapse-item font-weight-bold" href="<?php echo site_url('siswa/search_report') ?>">Laporan Pembelajaran</a>
                <a class="collapse-item font-weight-bold" href="<?php echo site_url('siswa/games') ?>">Games</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
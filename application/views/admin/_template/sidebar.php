<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TK PELITA HARAPAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/index') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
    <a class="nav-link" href="akun-admin.php">
        <i class="fas fa-user-edit"></i>
        <span class="font-weight-bold">Akun Admin</span>
    </a>
</li> -->

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/siswa') ?>">
            <i class="fas fa-user-tie"></i>
            <span>Siswa</span>
        </a>
    </li>


    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#akademik" aria-expanded="true" aria-controls="akademik">
            <i class="fas fa-user-shield"></i>
            <span>Guru</span>
        </a>
        <div id="akademik" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo site_url('admin/data_guru') ?>">Data Guru</a>
                <a class="collapse-item" href="<?php echo site_url('admin/akun_guru') ?>">Akun Guru</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pembayaran" aria-expanded="true" aria-controls="pembayaran">
            <i class="fas fa-coins"></i>
            <span>Pembayaran</span>
        </a>
        <div id="pembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo site_url('admin/data_rincianbayar') ?>">Rincian Pembayaran</a>
                <a class="collapse-item" href="<?php echo site_url('admin/data_pembayaran') ?>">Data Pembayaran Siswa</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#halamanutama" aria-expanded="true" aria-controls="halamanutama">
            <i class="fab fa-leanpub"></i>
            <span>Lain-Lain</span>
        </a>
        <div id="halamanutama" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <a class="collapse-item" href="profil-tk.php">Profil</a> -->
                <a class="collapse-item" href="<?php echo site_url('admin/kegiatan_tk') ?>">Kegiatan TK</a>
                <a class="collapse-item" href="<?php echo site_url('admin/fasilitas_tk') ?>">Fasilitas TK</a>
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
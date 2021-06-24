<nav class="navbar navbar-expand-lg navbar-dark yellow nav-height">
    <ul class="nav">
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link active " href="#">
                <img src="<?php echo base_url('assets/image/icon-phone.png') ?>" alt="icon-phone" srcset="">
                <span class="header-dec">+62 838-2223-9912</span>
            </a>

        </li>
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link" href="#">
                <img src="<?php echo base_url('assets/image/icon-message.png') ?>" alt="icon-message" srcset="">
                <span class="header-dec">tkpelita@gmail.com</span>
            </a>

        </li>
        <li class="nav-item icon-nav-margin ">
            <a class="nav-link active" href="#">
                <img src="<?php echo base_url('assets/image/icon-school.png') ?>" alt="icon-school" srcset="">
                <span class="header-dec">Komplek perumahan PG Asembagus</span>
            </a>
        </li>

    </ul>
</nav>
<div class="row">
    <div class="col m-auto ">
        <img class="label-utama" src="<?php echo base_url('assets/image/label-utama.jpg') ?>" alt="" srcset="">
    </div>
    <div class="col-3 m-auto mr-2">
        <button type="button " style="width: 100px;" class="btn login-color float-right mr-3 mt-1 mb-2" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
        <button type="button" style="width: 100px;" class="btn daftar-color float-right mr-3 mt-1 mb-2" onclick="document.getElementById('modal-wrapper2').style.display='block'">Daftar</button>
    </div>
</div>
</div>
<!-- Untuk Controller -->
<nav class="navbar navbar-expand-lg navbar-light p-0 " >
    <div class="col-lg-3 bg-tanggal m-0 ">
        <h5 class="p-1">
            <?php setlocale(LC_ALL, 'indonesian');
            echo strftime("%A, %d %B %Y"); ?>
        </h5>
    </div>
    <div class="col pink">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-navbar">
                <div class="menu" >
                    <ul>
                        <li><a class="judul" href="index.php?page=home">HOME</a>
                        <li><a href="index.php?page=profil">PROFIL</a>
                        <li><a href="index.php?page=kegiatan">KEGIATAN</a>
                        <li><a href="index.php?page=fasilitas">FASILITAS</a>
                        <li><a href="index.php?page=bantuan">BANTUAN</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
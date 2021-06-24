<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("home/_template/header.php") ?>
    <body>
        <?php $this->load->view("home/_template/navbar.php") ?>

    <div class="container">
        <br>
        <center>
            <img src="<?php echo base_url('assets/image/tentang.jpg') ?>" style="width:1000px; height:400px;">
        </center>
        <br>
        <div class="text-center">
            <h2 class="font-weight-bold">TK Pelita Harapan PG Asembagus</h2>
                <p>"TK Pelita Harapan PG Asembagus didirikan pada tanggal 5 Agustus 1965 di bawah naungan IIKB (Ikatan Istri Keluarga Besar) PG Asembagoes
            dengan pelindung adalah bapak General Manager PG Asembagoes. Adapun lokasi TK terletak di dusun Krajan timur RT 02 RW 05 dengan sarana dan prasarana
            yang memadai."</p>
        </div>
        <br>
        <h3 class="font-weight-bold">|Visi</h3>
        <p>“Mendukung Visi dan Misi Kementerian Pendidikan dan Kebudayaan dengan mewujudkan pendidikan tinggi vokasi yang unggul dan berdaya saing dibidang Teknologi Terapan yang menghasilkan lulusan berkarakter”</p>
        <br>
        <h3 class="font-weight-bold">|Misi</h3>
        <p class="text-justify">1. Meningkatkan pendidikan terapan yang inovatif dan berdaya saing. <br>
            2. Meningkatkan penelitian terapan, pengabdian kepada masyarakat dan kewirausahaan untuk menghasilkan nilai tambah produk inovasi.<br>
            3. Mewujudkan tata kelola Polije yang lebih baik dalam rangka reformasi birokrasi (Good Polije Governance).<br>
            4. Mengembangkan kerjasama tingkat nasional maupun internasional.</p>
        <h3 class="font-weight-bold">|Profil Lembaga</h3>
        <p>1. Nama TK : Pelita Harapan PG Asembagus<br>
            2. NSS : 001052316005<br>
            3. NPSN : 20575544
    </div>
    
    <div id="modal-wrapper" class="modal">
        <?php $this->load->view("home/_template/login.php") ?>
    </div>

    <div id="modal-wrapper3" class="modal">
        <?php $this->load->view("home/_template/lupapassword.php") ?>
    </div>

    <div id="modal-wrapper2" class="modal">
        <?php $this->load->view("home/_template/registrasi.php") ?>
    </div>

    <?php $this->load->view("home/_template/footer.php") ?>

    <?php $this->load->view("home/_template/js.php") ?>

</body>

</html>

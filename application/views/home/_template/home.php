<?php if (isset($_SESSION['Siswa'])) {
    header("location:../siswa/dash_siswa.php");
    exit;
} else if (isset($_SESSION['Guru'])) {
    header("location:../guru/dash_guru.php");
    exit;
} else if (isset($_SESSION['Admin'])) {
    header("location:../admin/dash-admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("home/_template/header.php") ?>
<body>
<?php $this->load->view("home/_template/navbar.php") ?>
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/image/slide-one.jpg') ?>" class="d-block w-30 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-30 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-30 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider3.jpg') ?>" class="d-block w-30 mx-auto" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div>
            <h2>|TK Pelita Harapan PG Asembagus</h2>
            <p class="text-justify">
                TK atau Taman Kanak-kanak merupakan jenjang pendidikan anak usia dini dalam bentuk pendidikan formal.
                TK Pelita Harapan PG Asembagus merupakan TK yang berada di Provini Jawa Timur dan berlokasi di daerah
                kabupaten Situbondo, kecamatan Asembagus. Pembelajaran di TK ini menganut sistem kurikulum TK yang menekankan pemberian
                rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan
                dalam memasuki pendidikan lebih lanjut.
        </div>
    </div>
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
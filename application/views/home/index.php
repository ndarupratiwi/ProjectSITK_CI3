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

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                // echo base_url('home');
                $this->load->view("home/_template/home.php");
                break;
            case 'profil':
                // echo base_url('home/profil');
                $this->load->view("home/_template/profil.php");
                break;
            case 'fasilitas':
                $this->load->view("home/_template/fasilitas.php");
                break;
            case 'bantuan':
                $this->load->view("home/_template/bantuan.php");
                break;
            case 'kegiatan':
                $this->load->view("home/_template/kegiatan.php");
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    } else {
        $this->load->view("home/_template/home.php");
    }

    ?>

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
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("home/_template/header.php") ?>
    <body>
        <?php $this->load->view("home/_template/navbar.php") ?>
<div class="container-fluid">
    <div class="row my-2">
        <?php
        foreach ($fasilitas as $row) {
        ?>
            <div class="col-6 my-3">
                <div class="card ">
                    <div class="card mx-auto p-2">
                        <img src="<?php echo base_url('uploads/foto_fasilitas/' . $row->foto) ?>" alt="" width="600" height="400">
                        <h5 class="card-title mt-3 mx-auto"><?php echo $row->deskripsi ?></h5>
                    </div>
                </div>
            </div>
        <?php } ?>
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
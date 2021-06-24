<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("home/_template/header.php") ?>
    <body>
        <?php $this->load->view("home/_template/navbar.php") ?>

    <div class="container-fluid mx-5">
        <div class="row mt-3">
            <?php if ($row->id % 2 == 0) { ?>
                <div class="col-5 mt-3">
                    <img src="<?php echo base_url('uploads/foto_kegiatan/' . $row->foto) ?>" alt="" width="600" height="400">
                </div>
                <div class="col my-auto mx-4">
                    <h3><?php echo $row->deskripsi; ?></h3>
                </div>
            <?php } else { ?>
                <div class="col my-auto mx-4">
                    <h3><?php echo $row->deskripsi; ?></h3>
                </div>
                <div class="col-5 mt-3 mr-5 pr-3">
                    <img src="<?php echo base_url('uploads/foto_kegiatan/' . $row->foto) ?>" alt="" width="600" height="400">
                </div>
            <?php } ?>
        </div>
    </div>
    <td></td>
<?php

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

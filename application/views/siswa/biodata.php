<div class="search mr-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center bg-warning">BIODATA SISWA</h2>
            </div>
        </div>
        <div class="row my-5 mx-5">
            <?php
            // $data = $this->db->quer("SELECT * FROM tb_siswa WHERE username='$username'");
            foreach ($siswa as $row) {
            ?>
                <div class="col-sm-4">
                    <img src="<?php echo base_url('uploads/foto_siswa/'); ?><?php echo $row->foto; ?>" width="200" height="250" alt="">
                </div>
                <div class=" col-sm-8">
                    <form action="" method="">
                        <div class="form-group row">
                            <label for="nama" class="col-form-label">No. Induk : <?php echo $row->no_induk ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-form-label">Nama : <?php echo $row->nama_lengkap ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="ttl" class="col-form-label">Tempat, Tanggal Lahir : <?php echo $row->ttl ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="jenkel" class="col-form-label">Jenis Kelamin : <?php echo $row->jenkel ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="hobi" class="col-form-label">Hobi : <?php echo $row->hobi ?></label>
                        </div>
                        <div class="form-group row">
                            <label for="kelompok" class="col-form-label">Kelompok : <?php echo $row->kelompok ?></label>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 img-right">
                    <img src="<?php echo base_url('assets/img/icon_bio.png') ?>" alt="" class="float-right">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Foto Fasilitas TK Pelita Harapan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Fasilitas</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php
            foreach ($editfasilitas as $row) {
            ?>
                <form action="<?php echo base_url('admin/update_fasilitas'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-3 col-form-label">1. Deskripsi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $row->deskripsi; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">2. Upload Foto :</label>
                        <div class="col-sm-9">
                            <img src="<?php echo base_url('uploads/foto_fasilitas/'); ?><?php echo $row->foto; ?>" width="200" height="250" alt="">
                            <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $row->foto; ?>">
                            <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                        </div>
                    </div>

                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <button type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
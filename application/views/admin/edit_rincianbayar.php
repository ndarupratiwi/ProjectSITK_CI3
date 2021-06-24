<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3> Edit Rincian Pembayaran TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">

            <?php
            foreach ($editrincianbayar as $row) {
            ?>

                <form method="POST" action="<?php echo base_url('admin/update_rincianbayar'); ?>" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row->id; ?>">
                    <div class="form-group row">
                        <label for="no_rekening" class="col-sm-3 col-form-label">No Rekening :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="no_rekening" id="no_rekening" value="<?php echo $row->no_rekening; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_daftar" class="col-sm-3 col-form-label">Biaya Daftar Ulang:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_daftar" name="biaya_daftar" value="<?php echo $row->biaya_daftar; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_seragam" class="col-sm-3 col-form-label">Biaya Seragam :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_seragam" name="biaya_seragam" value="<?php echo $row->biaya_seragam; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_buku" class="col-sm-3 col-form-label">Biaya Buku :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="biaya_buku" name="biaya_buku" value="<?php echo $row->biaya_buku; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_biaya" class="col-sm-3 col-form-label">Upload File Biaya :</label>
                        <div class="col-sm-9">
                            <?php echo $row->file_biaya; ?>
                            <input type="file" name="file_biaya" id="file_biaya">
                            <p>Format file harus pdf, docx, xls, atau doc. Maks size 2 MB</p>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-dark">UPDATE</button>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
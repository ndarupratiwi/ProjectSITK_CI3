<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3> Edit Pembayaran Siswa-Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-10 offset-sm-1">

            <?php
            foreach ($editpembayaran as $row) {
            ?>

                <form method="POST" action="<?php echo base_url('Admin/update_pembayaran'); ?>" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
                    <div class="form-group row">
                        <label for="nasabah" class="col-sm-3 col-form-label">Pembayaran Dari :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nasabah" name="nasabah" value="<?php echo $row->nasabah; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembayaran" class="col-sm-3 col-form-label">Tanggal Pembayaran :</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" value="<?php echo $row->tgl_pembayaran; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">Wali Murid Dari :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $row->nama_siswa; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-3 col-form-label">Kelompok :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="kelompok" name="kelompok" value="<?php echo $row->kelompok; ?>">
                                <option value="1" <?php if (($row->kelompok) == 'A') {
                                                        echo "selected";
                                                    } ?>>A</option>
                                <option value="2" <?php if (($row->kelompok) == 'B') {
                                                        echo "selected";
                                                    } ?>>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Keterangan :</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="status" name="status" value="<?php echo $row->status; ?>" required>
                                <option>Pilih Status Pembayaran</option>
                                <option value="1" <?php if (($row->status) == 'Belum Lunas') {
                                                        echo "selected";
                                                    } ?>>Belum Lunas</option>
                                <option value="2" <?php if (($row->status) == 'Lunas') {
                                                        echo "selected";
                                                    } ?>>Lunas</option>
                            </select>
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
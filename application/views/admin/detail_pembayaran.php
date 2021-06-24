<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Pembayaran Siswa-Siswi TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Data Pembayaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php foreach ($detailpembayaran as $row) { ?>

                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">1. ID Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo $row->id; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nasabah" class="col-sm-3 col-form-label">2. Nasabah :</label>
                        <div class="col-sm-9">
                            <?php echo $row->nasabah; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembayaran" class="col-sm-3 col-form-label">3. Tanggal Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo $row->tgl_pembayaran; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">4. Nama Siswa :</label>
                        <div class="col-sm-9">
                            <?php echo $row->nama_siswa; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-3 col-form-label">5. Kelompok :</label>
                        <div class="col-sm-9">
                            <?php echo $row->kelompok; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">6. Status Pembayaran :</label>
                        <div class="col-sm-9">
                            <?php echo $row->status; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 col-form-label">7. Bukti Pembayaran :</label>
                        <div class="col-sm-9">
                            <td><img src="<?php echo base_url('uploads/bukti_pembayaran/' . $row->bukti) ?>" alt="" width="250" height="200"></td>
                        </div>
                    </div>
                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <a href="<?php echo base_url('admin/data_pembayaran'); ?>" class="btn btn-info">KEMBALI</a>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
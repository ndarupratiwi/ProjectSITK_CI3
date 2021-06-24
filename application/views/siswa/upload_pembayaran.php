<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-10 offset-sm-1 bg-warning text-center text-white">
                <h4>Formulir Upload Pembayaran PPDB</h4>
            </div>
            <h5 class="mt-5">Upload Bukti Pembayaran Anda Disini:</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="uploadbukti" action="<?php echo base_url('siswa/input_pembayaran'); ?>" enctype="multipart/form-data" method="POST">
                <div class="form-group row">
                    <label for="nasabah" class="col-sm-3 col-form-label">1. Pembayaran dari:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nasabah" name="nasabah" placeholder="Nama No.Rek" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_pembayaran" class="col-sm-3 col-form-label">2. Tanggal Pembayaran :</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" placeholder="Tanggal Melakukan Pembayaran" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-3 col-form-label">2. Nama Siswa :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Wali murid dari" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelompok" class="col-sm-3 col-form-label">3. Kelompok :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="kelompok" name="kelompok" required>
                            <option value="0">Pilih Kelompok</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bukti" class="col-sm-3 col-form-label">4. Upload Bukti Pembayaran </label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="bukti" name="bukti" required>
                        <p>Format file harus jpg, jpeg, png atau pdf. Max size 2 MB.</p>
                    </div>
                </div>
                <!-- Buttom -->
                <div class="form-group row">
                    <div class="col-sm-10 text-right">
                        <button type="submit" id="kirim" name="kirim" value="kirim" class="btn btn-warning">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
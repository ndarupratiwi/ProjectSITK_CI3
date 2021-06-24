<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-10 offset-sm-1 bg-warning text-center text-white">
                <h4>Check Pembayaran PPDB</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 offset-sm-1">
            <h5 class="mt-5">Cek Konfirmasi Pembayaran Anda Disini:</h5>
            <p>Note: Mohon tunggu maksimal 3 x 24 jam</p>

            <form class="cekpembayaran" method="POST" action="<?php echo base_url('siswa/search_pembayaran'); ?>">
                <div class="form-group row">
                    <label for="nasabah" class="col-sm-3 col-form-label">1. Pembayaran dari :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nasabah" name="nasabah" placeholder="Nama No.Rek atau Nama Wali Murid" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-3 col-form-label">2. Nama Siswa :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
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
                <!-- Buttom -->
                <div class="text-center">
                    <a href="<?php echo base_url('siswa/search_pembayaran'); ?>" type="submit" name="kirim" id="kirim" value="kirim" class="btn btn-warning">Check</a>
                </div>
            </form>
        </div>
    </div>
</div>
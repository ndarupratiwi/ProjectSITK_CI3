<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Pendaftaran Siswa Baru TK Pelita Harapan PG Asembagus</h2>
            <h2>Tahun Ajaran 2021/2022</h2>
        </div>
    </div>
    <h6 class="mx-5 my-3">Catatan:</h6>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-warning text-center text-white">
            <h4>Formulir Pendaftaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 my-5">
            <form method="POST" action="<?php echo base_url('siswa/input_siswa'); ?>" class="formpendaftaran" enctype="multipart/form-data">
                <!-- <input type="hidden" class="form-control" id="username" name="username" value="" /> -->
                <!-- <input type="hidden" class="form-control" id="id" name="id" value="" /> -->
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-3 col-form-label">1. Nama Lengkap :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">2. Tempat, Tanggal Lahir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-3 col-form-label">3. Jenis Kelamin :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="jenkel" name="jenkel" required>
                            <option value="0">Pilih Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">4. Agama :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="0">Pilih Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Hindu</option>
                            <option value="4">Budha</option>
                            <option value="5">Katolik</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label">5. Nama Ayah :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">6. Pekerjaan Ayah :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-3 col-form-label">7. Nama Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">8. Pekerjaan Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="anak_ke" class="col-sm-3 col-form-label">9. Anak Ke- :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak Ke-" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hubungan_keluarga" class="col-sm-3 col-form-label">10. Hubungan Keluarga :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" placeholder="Hubungan Keluarga" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir_ayah" class="col-sm-3 col-form-label">11. Pendidikan Terakhir Ayah:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir_ayah" name="pend_terakhir_ayah" placeholder="Pendidikan terakhir Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir_ibu" class="col-sm-3 col-form-label">12. Pendidikan Terakhir Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir_ibu" name="pend_terakhir_ibu" placeholder="Pendidikan Terakhir ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">13. Alamat :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Masukkan Alamat Lengkap" id="alamat" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">14. E-mail :</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-3 col-form-label">15. No Telp :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telephone" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">16. Upload Foto :</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="foto" name="foto" required />
                        <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelompok" class="col-sm-3 col-form-label">17. Kelompok :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="kelompok" name="kelompok" required>
                            <option value="0">Pilih Kelompok</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tapel" class="col-sm-3 col-form-label">18. Tahun Ajaran :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tapel" name="tapel" placeholder="Tahun Ajaran" required />

                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <div class="kelompok mt-5 text-center my-3">
                        <button type="submit" class="btn btn-warning" id="kirim" name="kirim" value="kirim">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
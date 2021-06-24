<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Tambah Data Guru</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-primary text-center text-white">
            <h4>Isi Kolom dengan Benar</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="<?php echo base_url('Admin/input_guru') ?>" class="formpendaftaran" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">1. NIP :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nip" placeholder="Nama Lengkap" name="nip" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_guru" class="col-sm-3 col-form-label">2. Nama Guru :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru" name="nama_guru" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gr_kelompok" class="col-sm-3 col-form-label">3. Guru Kelompok :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gr_kelompok" name="gr_kelompok" required>
                            <option value="0">Pilih Kelompok</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">4. Tempat, Tanggal Lahir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-3 col-form-label">5. Jenis Kelamin :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="jenkel" name="jenkel" required>
                            <option value="0">Pilih Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir" class="col-sm-3 col-form-label">6. Pendidikan terakhir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir" placeholder="Pendidikan Terakhir" name="pend_terakhir" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">7. Agama :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="0">Pilih Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Protestan</option>
                            <option value="3">Hindu</option>
                            <option value="4">Budha</option>
                            <option value="5">Katolik</option>
                            <option value="6">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">8. Tahun Ijazah Terakhir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="th_ijazah_terakhir" name="th_ijazah_terakhir" placeholder="Tahun Ijazah Terakhir" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">9. Alamat :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">10. Status :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="status" name="status" required>
                            <option value="0">Pilih Status</option>
                            <option value="1">Kawin</option>
                            <option value="2">Belum Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-3 col-form-label">11. Jabatan :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-3 col-form-label">12. No. Telepon :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_sertifikasi" class="col-sm-3 col-form-label">13. No. Sertifikasi :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi" placeholder="No. Sertifikasi" required />
                    </div>
                </div>
                <div class="form-group row" method="post">
                    <label for="foto" class="col-sm-3 col-form-label">14. Upload Foto :</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="foto" name="foto" required />
                        <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5">
                    <div class="kelompok mt-5 text-center my-3">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary" id="kirim" name="kirim" value="kirim">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
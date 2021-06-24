<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Siswa-Siswi TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Data Siswa</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php
            foreach ($editsiswa as $row) {
            ?>
                <form action="<?php echo base_url('admin/update_siswa'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="id" class="col-sm-4 col-form-label">1. No. Pendaftaran :</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-4 col-form-label">2. Nomor Induk :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?php echo $row->no_induk; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-4 col-form-label">3. Nama Lengkap :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row->nama_lengkap; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-4 col-form-label">4. Kelompok :</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="kelompok" name="kelompok" value="<?php echo $row->kelompok; ?>">
                                <option value="1" <?php if (($row->kelompok) == 'A') {
                                                        echo "selected";
                                                    } ?>>A</option>
                                <option value="2" <?php if (($row->kelompok) == 'B') {
                                                        echo "selected";
                                                    } ?>>B</option>
                                <option value="3" <?php if (($row->kelompok) == 'LULUS') {
                                                        echo "selected";
                                                    } ?>>LULUS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-4 col-form-label">5. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $row->ttl; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-4 col-form-label">6. Jenis Kelamin :</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="jenkel" name="jenkel" value="<?php echo $row->jenkel; ?>">
                                <option value="1" <?php if (($row->jenkel) == 'Laki-laki') {
                                                        echo "selected";
                                                    } ?>>Laki-laki</option>
                                <option value="2" <?php if (($row->jenkel) == 'Perempuan') {
                                                        echo "selected";
                                                    } ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-4 col-form-label">7. Agama :</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="agama" name="agama" value="<?php echo $row->agama; ?>">
                                <option value="1" <?php if (($row->agama) == 'Islam') {
                                                        echo "selected";
                                                    } ?>>Islam</option>
                                <option value="2" <?php if (($row->agama) == 'Kristen') {
                                                        echo "selected";
                                                    } ?>>Kristen</option>
                                <option value="3" <?php if (($row->agama) == 'Hindu') {
                                                        echo "selected";
                                                    } ?>>Hindu</option>
                                <option value="4" <?php if (($row->agama) == 'Budha') {
                                                        echo "selected";
                                                    } ?>>Budha</option>
                                <option value="5" <?php if (($row->agama) == 'Katolik') {
                                                        echo "selected";
                                                    } ?>>Katolik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ayah" class="col-sm-4 col-form-label">8. Nama Ayah :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $row->nama_ayah; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">9. Pekerjaan Ayah :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $row->pekerjaan_ayah; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-4 col-form-label">10. Nama Ibu :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $row->nama_ibu; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">11. Pekerjaan Ibu :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $row->pekerjaan_ibu; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-4 col-form-label">12. Anak Ke- :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $row->anak_ke; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-4 col-form-label">13. Hobi :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $row->hobi; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_keluarga" class="col-sm-4 col-form-label">14. Hubungan Keluarga :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" value="<?php echo $row->hubungan_keluarga; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ayah" class="col-sm-4 col-form-label">15. Pendidikan Terakhir Ayah :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pend_terakhir_ayah" name="pend_terakhir_ayah" value="<?php echo $row->pend_terakhir_ayah; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ibu" class="col-sm-4 col-form-label">16. Pendidikan Terakhir Ibu :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pend_terakhir_ibu" name="pend_terakhir_ibu" value="<?php echo $row->pend_terakhir_ibu; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">17. Alamat :</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="alamat" name="alamat"><?php echo $row->alamat; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">18. E-mail :</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-4 col-form-label">19. No Telp :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $row->telp; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-4 col-form-label">16. Upload Foto :</label>
                        <div class="col-sm-8">
                            <img src="<?php echo base_url('uploads/foto_siswa/'); ?><?php echo $row->foto; ?>" width="200" height="250" alt="">
                            <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $row->foto; ?>">
                            <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                        </div>
                    </div>

                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <button type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
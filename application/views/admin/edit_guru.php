<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Guru TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Data Guru</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php
            foreach ($editguru as $row) {
            ?>

                <form action="<?php echo base_url('admin/update_guru'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">1. NIP :</label>
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
                            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row->nip; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_guru" class="col-sm-3 col-form-label">2. Nama Guru :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $row->nama_guru; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gr_kelompok" class="col-sm-3 col-form-label">3. Guru Kelompok :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="gr_kelompok" name="gr_kelompok" value="<?php echo $row->gr_kelompok; ?>">
                                <option value="1" <?php if (($row->gr_kelompok) == 'A') {
                                                        echo "selected";
                                                    } ?>>A</option>
                                <option value="2" <?php if (($row->gr_kelompok) == 'B') {
                                                        echo "selected";
                                                    } ?>>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-3 col-form-label">4. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $row->ttl; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-3 col-form-label">5. Jenis Kelamin :</label>
                        <div class="col-sm-9">
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
                        <label for="pend_terakhir" class="col-sm-3 col-form-label">6. Pendidikan Terakhir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir" value="<?php echo $row->pend_terakhir; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label">7. Agama :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="agama" name="agama" value="<?php echo $row->agama; ?>">
                                <option value="1" <?php if (($row->agama) == 'Islam') {
                                                        echo "selected";
                                                    } ?>>Islam</option>
                                <option value="2" <?php if (($row->agama) == 'Protestan') {
                                                        echo "selected";
                                                    } ?>>Protestan</option>
                                <option value="3" <?php if (($row->agama) == 'Hindu') {
                                                        echo "selected";
                                                    } ?>>Hindu</option>
                                <option value="4" <?php if (($row->agama) == 'Budha') {
                                                        echo "selected";
                                                    } ?>>Budha</option>
                                <option value="5" <?php if (($row->agama) == 'Katolik') {
                                                        echo "selected";
                                                    } ?>>Katolik</option>
                                <option value="6" <?php if (($row->agama) == 'Konghucu') {
                                                        echo "selected";
                                                    } ?>>Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">8. Tahun Ijazah Terakhir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="th_ijazah_terakhir" name="th_ijazah_terakhir" value="<?php echo $row->th_ijazah_terakhir; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">9. Alamat :</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" name="alamat"><?php echo $row->alamat; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">10. Status :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status" value="<?php echo $row->status; ?>">
                                <option value="1" <?php if (($row->status) == 'Kawin') {
                                                        echo "selected";
                                                    } ?>>Kawin</option>
                                <option value="2" <?php if (($row->status) == 'Belum Kawin') {
                                                        echo "selected";
                                                    } ?>>Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">11. Jabatan :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $row->jabatan; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">12. No Telp :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $row->telp; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_sertifikasi" class="col-sm-3 col-form-label">13. No Sertifikasi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi" value="<?php echo $row->no_sertifikasi; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">16. Upload Foto :</label>
                        <div class="col-sm-9">
                            <img src="<?php echo base_url('uploads/foto_guru/'); ?><?php echo $row->foto; ?>" width="200" height="250" alt="">
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
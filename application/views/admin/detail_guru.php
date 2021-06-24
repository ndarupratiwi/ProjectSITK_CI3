<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>DATA GURU TK PELITA HARAPAN</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-primary text-center text-white">
            <h4>Data Guru</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php foreach ($detailguru as $row) { ?>

                <form>
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">1.NIP :</label>
                        <div class="col-sm-9">
                            <?php echo $row->nip; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_guru" class="col-sm-3 col-form-label">2. Nama Guru :</label>
                        <div class="col-sm-9">
                            <?php echo $row->nama_guru; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gr_kelompok" class="col-sm-3 col-form-label">3. Guru Kelompok :</label>
                        <div class="col-sm-9">
                            <?php echo $row->gr_kelompok; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-3 col-form-label">4. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <?php echo $row->ttl; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-3 col-form-label">5. Jenis Kelamin :</label>
                        <div class="col-sm-9">
                            <?php echo $row->jenkel; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir" class="col-sm-3 col-form-label">6. Pendidikan Terakhir :</label>
                        <div class="col-sm-5">
                            <?php echo $row->pend_terakhir; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label">7. Agama :</label>
                        <div class="col-sm-5">
                            <?php echo $row->agama; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">8. Tahun Ijazah Terakhir :</label>
                        <div class="col-sm-9">
                            <?php echo $row->th_ijazah_terakhir; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">9. Alamat :</label>
                        <div class="col-sm-9">
                            <?php echo $row->alamat; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">10. Status :</label>
                        <div class="col-sm-9">
                            <?php echo $row->status; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">11. Jabatan :</label>
                        <div class="col-sm-9">
                            <?php echo $row->jabatan; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">12. No Telepon :</label>
                        <div class="col-sm-9">
                            <?php echo $row->telp; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_sertifikasi" class="col-sm-3 col-form-label">13. No Sertifikasi :</label>
                        <div class="col-sm-9">
                            <?php echo $row->no_sertifikasi; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">20. Upload Foto :</label>
                        <div class="col-sm-8">
                            <td><img src="<?php echo base_url('uploads/foto_guru/' . $row->foto) ?>" alt="" width="250" height="200"></td>
                        </div>
                    </div>

                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <a href=<?php echo base_url('admin/data_guru'); ?> class="btn btn-info">KEMBALI</a>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
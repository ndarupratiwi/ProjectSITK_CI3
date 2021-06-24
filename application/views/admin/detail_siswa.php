<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Siswa-Siswi TK Pelita Harapan PG Asembagus</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-primary text-center text-white">
            <h4>Data Siswa</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php foreach ($detail as $row) { ?>

                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-4 col-form-label">1. ID Pendaftaran :</label>
                        <div class="col-sm-8">
                            <?php echo $row->id; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-4 col-form-label">2. Nomor Induk :</label>
                        <div class="col-sm-8">
                            <?php echo $row->no_induk; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-4 col-form-label">3. Nama Lengkap :</label>
                        <div class="col-sm-8">
                            <?php echo $row->nama_lengkap; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok" class="col-sm-4 col-form-label">4. Kelompok :</label>
                        <div class="col-sm-8">
                            <?php echo $row->kelompok; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-4 col-form-label">5. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-8">
                            <?php echo $row->ttl; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-4 col-form-label">6. Jenis Kelamin :</label>
                        <div class="col-sm-5">
                            <?php echo $row->jenkel; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-4 col-form-label">7. Agama :</label>
                        <div class="col-sm-5">
                            <?php echo $row->agama; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ayah" class="col-sm-4 col-form-label">8. Nama Ayah :</label>
                        <div class="col-sm-8">
                            <?php echo $row->nama_ayah; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">9. Pekerjaan Ayah :</label>
                        <div class="col-sm-8">
                            <?php echo $row->pekerjaan_ayah; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-4 col-form-label">10. Nama Ibu :</label>
                        <div class="col-sm-8">
                            <?php echo $row->nama_ibu; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">11. Pekerjaan Ibu :</label>
                        <div class="col-sm-8">
                            <?php echo $row->pekerjaan_ibu; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-4 col-form-label">12. Anak Ke- :</label>
                        <div class="col-sm-8">
                            <?php echo $row->anak_ke; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-4 col-form-label">13. Hobi :</label>
                        <div class="col-sm-8">
                            <?php echo $row->hobi; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_keluarga" class="col-sm-4 col-form-label">14. Hubungan Keluarga :</label>
                        <div class="col-sm-8">
                            <?php echo $row->hubungan_keluarga; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ayah" class="col-sm-4 col-form-label">15. Pendidikan Terakhir Ayah:</label>
                        <div class="col-sm-8">
                            <?php echo $row->pend_terakhir_ayah; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir_ibu" class="col-sm-4 col-form-label">16. Pendidikan Terakhir Ibu :</label>
                        <div class="col-sm-8">
                            <?php echo $row->pend_terakhir_ibu; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">17. Alamat :</label>
                        <div class="col-sm-8">
                            <?php echo $row->alamat; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">18. E-mail :</label>
                        <div class="col-sm-8">
                            <?php echo $row->email; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-4 col-form-label">19. No Telp :</label>
                        <div class="col-sm-8">
                            <?php echo $row->telp; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-4 col-form-label">20. Foto Siswa :</label>
                        <div class="col-sm-8">
                            <td><img src="<?php echo base_url('uploads/foto_siswa/' . $row->foto) ?>" alt="" width="250" height="200"></td>
                        </div>
                    </div>

                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <a href=<?php echo base_url('admin/siswa'); ?> class="btn btn-info">KEMBALI</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</div>
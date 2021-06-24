<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3> Edit Laporan Pembelajaran Siswa/Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <?php
            foreach ($report as $data) {
            ?>
                <form method="POST" class="editReport" action="<?php echo base_url('guru/update_report'); ?>">
                    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                    <!-- <input type="hidden" name="no_induk" value=""> -->
                    <div class="form-group row">
                        <label for="tgl_report" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_report" id="tgl_report" value="<?php echo $data->tgl_report; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $data->nama_siswa; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-2 col-form-label">No Induk:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?php echo $data->no_induk; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kel_report" class="col-sm-2 col-form-label">Kelompok :</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="kel_report" name="kel_report">
                                <option value="1" <?php if (($data->kel_report) == 'A') {
                                                        echo "selected";
                                                    } ?>>A</option>
                                <option value="2" <?php if (($data->kel_report) == 'B') {
                                                        echo "selected";
                                                    } ?>>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-2 col-form-label">No Induk :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?php echo $data->no_induk; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="laporan" class="col-sm-2 col-form-label">Laporan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="laporan" name="laporan"><?php echo $data->laporan; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" id="kirim" name="kirim" value="kirim" class="btn btn-dark">Update</button>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
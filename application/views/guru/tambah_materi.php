<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Pembelajaran TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-sm-10 offset-sm-1">
            <form class="materi" action="<?php echo base_url('guru/input_materi'); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kel_materi" class="col-sm-2 col-form-label">Kelompok :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="kel_materi" name="kel_materi">
                            <option value="0">Pilih Kelompok</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tema" class="col-sm-2 col-form-label">Tema :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="materi" class="col-sm-2 col-form-label">Upload Materi :</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="materi" name="materi" required>
                        <p>Format file docx, pdf, ppt, atau xls. Max size 10 MB!</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center my-3">
                        <button type="submit" name="kirim" id="kirim" value="kirim" class="btn btn-dark">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
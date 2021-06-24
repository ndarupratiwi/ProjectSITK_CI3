<div class="konfirmasipembayaran" style="margin:125px auto;">
    <div class="container my-5 bg-warning text-white">
        <div class="row">
            <div class="col-sm-12 my-3">
                <h4 class="text-center">Konfirmasi Pembayaran</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-10 offset-sm-1">
                <?php foreach ($pembayaran as $row) { ?>
                    <form class="pembayaran" style="width: 800px;" action="<?php echo base_url('siswa/search_pembayaran'); ?>">
                        <h5>Status Pembayaran :</h5>
                        <div class="container">
                            <div class="form-group row">
                                <label for="nasabah" class="col-sm-3 col-form-label ">Nama Pembayar:</label>
                                <div class="col-sm-9">
                                    <?php echo $row->nasabah ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama-siswa" class="col-sm-3 col-form-label ">Nama Siswa:</label>
                                <div class="col-sm-9">
                                    <?php echo $row->nama_siswa ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-3 col-form-label">Status :</label>
                                <div class="col-sm-9">
                                    <?php echo $row->status ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <div class="col-sm-10 text-right">
                                <a href="index" class="btn btn-dark">OK</a>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div>

            <div class="cetakreport text-right">
                <a href="<?php echo base_url('Admin/report_siswa') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-print"></i> Cetak Laporan</a>
            </div>
            <div class="form-group row">
                <!-- <div class="col-sm-0">
                    <h6 class="m-0 font-weight-bold text-black">Pilih Kelompok</h6>
                    <select class="form-control" id="gr_kelompok" name="gr_kelompok" required>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div> -->
                <!-- <div class="col-sm-0">
                    <h6 class="m-0 font-weight-bold text-black">Pilih Tahun Ajaran</h6>
                    <select name="" id="">
                        <option value="">Pilih Tahun Ajaran</option>
                        <script>
                            var tahun = 2000;
                            for (i = 2021; i >= tahun; i--) {
                                document.write("<option>" + i + "</option>");
                            }
                        </script>
                    </select>
                </div> -->
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Jenkel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($siswa as $row) {
                        ?>

                            <tr>
                                <td><?php echo $row->no_induk; ?></td>
                                <td><?php echo $row->nama_lengkap; ?></td>
                                <td><?php echo $row->kelompok; ?></td>
                                <td><?php echo $row->jenkel; ?></td>
                                <td>
                                    <a class="fas fa-info-circle" href="<?php echo base_url('Admin/detail_siswa/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/edit_siswa/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('Admin/hapus_siswa/' . $row->id); ?>">&nbsp;</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Laporan Pembelajaran Siswa/Siswi TK Pelita Harapan</h3>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Tanggal</th>
                            <th>Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($report as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->no_induk; ?></td>
                                <td><?php echo $row->nama_siswa; ?></td>
                                <td><?php echo $row->kel_report; ?></td>
                                <td><?php echo $row->tgl_report; ?></td>
                                <td><?php echo $row->laporan; ?></td>
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
<!-- Data Pembayaran Siswa -->
<div class="container-fluid" id="pendaftaran" name="pendaftaran">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran Siswa-Siswi TK Pelita Harapan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('Admin/report_pembayaran') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-print"></i> Cetak Laporan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelompok</th>
                            <th>Tanggal Bayar</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($datapembayaran as $row) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row->nama_siswa; ?></td>
                                <td><?php echo $row->kelompok; ?></td>
                                <td><?php echo $row->tgl_pembayaran; ?></td>
                                <td><?php echo $row->status; ?></td>
                                <td>
                                    <a class="fas fa-info-circle" href="<?php echo base_url('Admin/detail_pembayaran/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/edit_pembayaran/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('Admin/hapus_pembayaran/' . $row->id); ?>">&nbsp;</a>
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
<!-- /.container-fluid -->
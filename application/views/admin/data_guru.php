<!-- Data Guru TK Pelita Harapan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Guru TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('Admin/report_guru') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-print"></i> Cetak Laporan</a>
                <a href="<?php echo base_url('Admin/tambah_guru') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus-square"></i> Data Guru</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Guru Kelompok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($guru as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->nip; ?></td>
                                <td><?php echo $row->nama_guru; ?></td>
                                <td><?php echo $row->gr_kelompok; ?></td>
                                <td>
                                    <a class="fas fa-info-circle" href="<?php echo base_url('Admin/detail_guru/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/edit_guru/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('Admin/hapus_guru/' . $row->id); ?>">&nbsp;</a>
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
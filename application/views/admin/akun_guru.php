<!-- Data Akun Guru TK Pelita Harapan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Akun Guru TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-right">
            <a href="<?php echo base_url('Admin/tambah_akunguru') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus-square"></i> Akun Guru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>E-MAIL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($akunguru as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->username ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a class="fas fa-info-circle" href="<?php echo base_url('admin/detail_akunguru/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('admin/hapus_akunguru/' . $row->id); ?>">&nbsp;</a>
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
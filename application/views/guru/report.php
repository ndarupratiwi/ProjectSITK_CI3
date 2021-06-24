<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Report Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Report Siswa</h6>
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('Guru/tambah_report') ?>" class="btn btn-warning" type="button">+Input Report</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "Report berhasil di input";
                    } elseif ($pesan == "update") {
                        echo "Report berhasil di update";
                    } elseif ($pesan == "hapus") {
                        echo "Report berhasil di hapus";
                    }
                }
                ?> <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Tanggal</th>
                            <th>Laporan</th>
                            <th>Action</th>
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
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('guru/edit_report/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('guru/hapus_report/' . $row->id); ?>">&nbsp;</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
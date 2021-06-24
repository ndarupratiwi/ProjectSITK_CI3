<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Materi Siswa TK Pelita Harapan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi Siswa</h6>
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('Guru/tambah_materi') ?>" class="btn btn-warning" type="button">+Input Materi</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "<div class='alert'>Materi berhasil di upload !</div>";
                    } elseif ($pesan == "update") {
                        echo "<div class='alert'>Materi berhasil di update !</div>";
                    } elseif ($pesan == "hapus") {
                        echo "<div class='alert'>Materi berhasil di hapus !</div>";
                    }
                }
                ?> <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID</th>
                            <th>Hari, Tanggal</th>
                            <th>Kelompok</th>
                            <th>Tema</th>
                            <th>Upload Materi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($materi as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->id_materi; ?></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->kel_materi; ?></td>
                                <td><?php echo $row->tema; ?></td>
                                <td><?php echo $row->materi; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('guru/edit_materi/' . $row->id_materi); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('guru/hapus_materi/' . $row->id_materi); ?>">&nbsp;</a>
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
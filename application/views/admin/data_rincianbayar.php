<div class="container-fluid" id="pendaftaran" name="pendaftaran">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran TK Pelita Harapan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rincian Pembayaran PPDB TK Pelita Harapan PG Asembagus</h6>
            <br>
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('Admin/tambah_rincianbayar') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus-square"></i> Rincian Bayar</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Rekening</th>
                            <th>Biaya Daftar</th>
                            <th>Biaya Seragam</th>
                            <th>Biaya Buku</th>
                            <th>Total</th>
                            <th>File Rincian Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($rincianbayar as $row) {
                            $nomor = 1;
                        ?>

                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row->no_rekening ?></td>
                                <td><?php echo $row->biaya_daftar ?></td>
                                <td><?php echo $row->biaya_seragam ?></td>
                                <td><?php echo $row->biaya_buku; ?></td>
                                <td>
                                    <?php
                                    $jumlah = $row->biaya_daftar + $row->biaya_seragam + $row->biaya_buku;
                                    echo "$jumlah";
                                    ?>
                                </td>
                                <td><?php echo $row->file_biaya; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/edit_rincianbayar/' . $row->id); ?>">&nbsp;</a>
                                    <a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('Admin/hapus_rincianbayar/' . $row->id); ?>">&nbsp;</a>
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
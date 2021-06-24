<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <h2 class="m-0 font-weight-bold text-primary">Data Pembayaran</h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nasabah</th>
                            <th>Nama Siswa</th>
                            <th>Kelompok</th>
                            <th>Tanggal Bayar</th>
                            <th>Bukti Pembayaran</th>
                        </tr>
                    </thead>

                    <?php
                    $nomor = 1;
                    foreach ($pembayaran as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row->nasabah; ?></td>
                                <td><?php echo $row->nama_siswa; ?></td>
                                <td><?php echo $row->kelompok; ?></td>
                                <td><?php echo $row->tgl_pembayaran; ?></td>
                                <td><img src="<?php echo base_url('uploads/bukti_pembayaran/' . $row->bukti) ?>" alt="" width="150" height="100"></td>
                            </tr>

                        <?php
                    }
                        ?>

                        </tbody>
                </table>

                <script type="text/javascript">
                    window.print();
                </script>
            </div>
        </div>
    </div>
</div>
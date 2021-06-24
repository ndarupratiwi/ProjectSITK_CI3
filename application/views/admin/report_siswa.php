<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row text-center">
            <h2 class="m-0 font-weight-bold text-primary">Data Siswa TK Pelita Harapan</h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Jenkel</th>
                            <th>Foto</th>
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    foreach ($siswa as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->no_induk ?></td>
                                <td><?php echo $row->nama_lengkap ?></td>
                                <td><?php echo $row->kelompok ?></td>
                                <td><?php echo $row->ttl ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->jenkel ?></td>
                                <td><img src="<?php echo base_url('uploads/foto_siswa/' . $row->foto) ?>" alt="" width="150" height="100"></td>
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
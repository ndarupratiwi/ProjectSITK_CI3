<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <h2 class="m-0 font-weight-bold text-primary">Data Guru TK Pelita Harapan</h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Guru Kelompok</th>
                            <th>No. Telp</th>
                            <th>Foto</th>
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    foreach ($guru as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama_guru ?></td>
                                <td><?php echo $row->gr_kelompok ?></td>
                                <td><?php echo $row->telp ?></td>
                                <td><img src="<?php echo base_url('uploads/foto_guru/' . $row->foto) ?>" alt="" width="150" height="100"></td>
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
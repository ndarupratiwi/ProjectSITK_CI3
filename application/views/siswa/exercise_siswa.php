<div class="container">
    <div class="row">
        <div class="col text-center">
            <h4>Materi Pembelajaran TK Pelita Harapan PG Asembagus</h4>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Hari, Tanggal</th>
                            <th>Tema</th>
                            <th>Kelompok</th>
                            <th>Materi</th>
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
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->tema; ?></td>
                                <td><?php echo $row->kel_materi; ?></td>
                                <td><?php echo $row->materi; ?></td>
                                <td>
                                    <a download="<?php echo $row->materi; ?>" class="fas fa-download" href="<?php echo base_url('uploads/materi/'); ?><?php echo $row->materi; ?>"> Download</a>
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
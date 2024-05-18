<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Reservasi</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('beranda/reservasi') ?>">Reservasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Reservasi</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Reservasi</h4>
                        <p class="card-description">
                            <a href="<?php echo site_url('beranda/add_reservasi') ?>" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add Reservasi
                            </a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Invoice</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Lapangan</th>
                                        <th>Durasi Main</th>
                                        <th>Waktu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($tb_reservasi as $reservasi) { ?> 
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td>Invoice-<?php echo $reservasi->id_reservasi ?></td>
                                        <td><?php echo $reservasi->tgl_reservasi ?></td>
                                        <td><?php echo $reservasi->member_name ?></td>
                                        <td><?php echo $reservasi->lapangan_name ?></td>
                                        <td><?php echo $reservasi->durasi_reservasi ?></td>
                                        <td><?php echo $reservasi->waktu_reservasi ?></td>
                                        <td>
                                            <a href="<?php echo site_url('beranda/edit_reservasi/' . $reservasi->id_reservasi); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
                                            <a href="#modalDeleteReservasi" data-bs-toggle="modal" data-bs-target="#modalDeleteReservasi" onclick="$('#modalDeleteReservasi #formDeleteReservasi').attr('action', '<?=site_url('beranda/del_reservasi/'.$reservasi->id_reservasi)?>')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php $no++ ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
    <div class="modal fade" id="modalDeleteReservasi">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="font-weight-normal">Apakah ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Tidak</button>
                    <form id="formDeleteReservasi" action="" method="post">
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">  Lapangan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('Beranda/lapangan') ?>">Lapangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Lapangan</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Lapangan</h4>
                        <p class="card-description"><a href="<?php echo site_url('beranda/add_lapangan') ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Lapangan
                    </a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Lapangan</th>
                                        <th>Jenis Lapangan </th>
                                        <th>Deskripsi</th>
                                        <th>Harga Sewa/Jam</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($tb_lapangan as $lap) { ?> 
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $lap->nama_lapangan ?></td>
                                        <td><?php echo $lap->jenis_lapangan ?></td>
                                        <td><?php echo $lap->deskripsi_lapangan ?></td>
                                        <td>Rp.<?php echo number_format ($lap->harga_lapangan) ?></td>
                                        <td><img src="<?= base_url()?>assets2/gambargor/<?=$lap->foto_lapangan; ?>" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;"></td>
                                        <td>
                                                <a href="<?php echo site_url('beranda/edit_lapangan/' . $lap->id_lapangan); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                                                <a href="#modalDeleteLapangan" data-bs-toggle="modal" data-bs-target="#modalDelete" onclick="$('#modalDelete #formDelete').attr('action', '<?=site_url('beranda/del_lapangan/'.$lap->id_lapangan)?>')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Delete
				    						</a>
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
    <div class="modal fade" id="modalDelete">
 	    <div class="modal-dialog modal-sm">
 		    <div class="modal-content">
 			    <div class="modal-header">
 				    <h5 class="modal-title">Konfirmasi </h5>
 				    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 			    </div>
 			    <div class="modal-body">
 				    <p class="font-weight-normal">Apakah ingin menghapus data ini?</p>
 			    </div>
 			    <div class="modal-footer">
 				    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Tidak</button>
 				    <form id="formDelete" action="" method="post">
 					    <button class="btn btn-danger" type="submit" > Hapus</button>
 				    </form>
 			    </div>
 		    </div>
 	    </div>
    </div>
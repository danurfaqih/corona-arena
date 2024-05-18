<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Customer </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('beranda/customer') ?>">Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Customer</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Member</h4>
                        <p class="card-description"><a href="<?php echo site_url('beranda/add_member') ?>" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Member</a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Hp</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($tb_member as $mem) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $mem->nama_member ?></td>
                                            <td><?php echo $mem->tlp_member ?></td>
                                            <td><?php echo $mem->email_member ?></td>
                                            <td>
                                                <?php 
                                                $status = $mem->status_member;
                                                $badge_class = ($status == 'Active') ? 'badge-success' : 'badge-danger';
                                                ?>
                                                <span class="badge <?php echo $badge_class; ?>"><?php echo $status; ?></span>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('Beranda/edit_member/' . $mem->id_member); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                                                <a href="#modalDeleteMember" data-bs-toggle="modal" data-bs-target="#modalDeleteMember" onclick="$('#modalDeleteMember #formDelete').attr('action', '<?=site_url('beranda/del_member/'.$mem->id_member)?>')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
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
        <div class="modal fade" id="modalDeleteMember">
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


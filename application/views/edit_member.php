<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Customer </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('beranda/customer') ?>">Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Customer</h4>
                        <p class="card-description">Ubah Data Customer</p>
                        <form class="forms-sample" action="<?php echo site_url('beranda/update_member') ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($tb_member as $member) { ?>
                            <div class="container-fluid">
                                <div class="form-group row">
                                    <label for="id_member" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <input type="hidden" class="form-control" id="id_member" name="id_member" value="<?= $member->id_member; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_member" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= $member->nama_member; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_member" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email_member" name="email_member" value="<?= $member->email_member; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tlp_member" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tlp_member" name="tlp_member" value="<?= $member->tlp_member; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Status_member">Status</label>
                                    <select class="form-control" id="status_member" name="status_member">
                                    <option <?php if ($member->status_member == 'Active') echo 'selected="selected"'; ?>>Active</option>
                                    <option <?php if ($member->status_member == 'Inactive') echo 'selected="selected"'; ?>>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a class="btn btn-dark" href="<?php echo site_url('beranda/customer') ?>">Cancel</a>
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


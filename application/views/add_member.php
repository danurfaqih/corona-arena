<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Customer </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('beranda/customer') ?>">Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Customer</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Customer</h4>
                        <p class="card-description">Input Customer Baru</p>
                        <form class="forms-sample" action="<?php echo site_url('beranda/simpan_member') ?>" method="post" enctype="multipart/form-data">
                            <div class="container-fluid">
                                <div class="form-group row">
                                    <label for="nama_member" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_member" name="nama_member" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_member" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email_member" name="email_member" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tlp_member" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tlp_member" name="tlp_member" placeholder="Mobile number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Status_member">Status</label>
                                    <select class="form-control" id="status_member" name="status_member" required>
                                        <option>--Pilih Status--</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a class="btn btn-dark" href="<?php echo site_url('beranda/customer') ?>">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


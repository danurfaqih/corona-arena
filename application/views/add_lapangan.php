<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Lapangan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('Beranda/lapangan') ?>">Lapangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Lapangan</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Lapangan</h4>
                        <p class="card-description"> Input Lapangan Baru </p>
                        <form class="forms-sample" action="<?php echo site_url('beranda/simpan_lapangan') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_lapangan">Nama Lapangan</label>
                            <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" placeholder="Masukan Nama Lapangan" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Lapangan</label>
                            <input type="text" class="form-control" name="harga_lapangan" id="harga_lapangan" placeholder="Masukan Harga Lapangan" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_lapangan">Jenis</label>
                            <select class="form-control" id="jenis_lapangan" name="jenis_lapangan" required>
                            <option>Vinyl</option>
                            <option>Sintetis</option>
                            <option>Parquetta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto_lapangan">Upload Foto</label>
                            <input type="file" name="foto_lapangan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi lapangan</label>
                            <textarea class="form-control" name="deskripsi_lapangan" id="Deskripsi_lapangan" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-dark" href="<?php echo site_url('beranda/lapangan') ?>">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

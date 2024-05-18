<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Lapangan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('Beranda/lapangan') ?>">Lapangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Lapangan</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Lapangan</h4>
                        <form class="forms-sample" action="<?php echo site_url('beranda/update_lapangan') ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($tb_lapangan as $data) { ?>
                                <div class="form-group">
                                    <label for="idlapangan">Lapangan Id</label>
                                    <input type="hidden" class="form-control" id="idlapangan" name="idlapangan" value="<?php echo $data->id_lapangan; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_lapangan">Nama Lapangan</label>
                                    <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" value="<?php echo $data->nama_lapangan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga_lapangan">Harga Lapangan</label>
                                    <input type="text" class="form-control" id="harga_lapangan" name="harga_lapangan" value="<?php echo $data->harga_lapangan; ?>" placeholder="Masukan Harga Lapangan">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_lapangan">Jenis</label>
                                    <select class="form-control" id="jenis_lapangan" name="jenis_lapangan">
                                        <option <?php if ($data->jenis_lapangan == 'Vinyl') echo 'selected="selected"'; ?>>Vinyl</option>
                                        <option <?php if ($data->jenis_lapangan == 'Sintetis') echo 'selected="selected"'; ?>>Sintetis</option>
                                        <option <?php if ($data->jenis_lapangan == 'Parquetta') echo 'selected="selected"'; ?>>Parquetta</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi_lapangan">Deskripsi Lapangan</label>
                                    <textarea class="form-control" id="deskripsi_lapangan" name="deskripsi_lapangan" rows="4"><?php echo $data->deskripsi_lapangan; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto_lapangan">Gambar saat ini</label><br>
                                    <img src="<?= base_url()?>assets2/gambargor/<?=$data->foto_lapangan; ?>" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="foto_lapangan">Upload Gambar Baru</label>
                                    <input type="file" name="foto_lapangan" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-dark" href="<?php echo site_url('beranda/lapangan') ?>">Cancel</a>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
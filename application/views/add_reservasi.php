<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Reservasi </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('beranda/reservasi') ?>">Reservasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Reservasi</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Reservasi</h4>
                        <form class="forms-sample" action="<?php echo site_url('beranda/simpan_reservasi') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="customer">Customer</label>
                                <select class="form-control" id="customer" name="customer" required>
                                    <option value="">--Pilih Customer--</option>
                                    <?php foreach ($tb_member as $member) : ?>
                                        <option value="<?php echo $member->id_member; ?>"><?php echo $member->nama_member; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lapangan">Lapangan</label>
                                <select class="form-control" id="lapangan" name="lapangan" required>
                                    <option value="">--Pilih Lapangan--</option>
                                    <?php foreach ($tb_lapangan as $lapangan) : ?>
                                        <option value="<?php echo $lapangan->id_lapangan; ?>"><?php echo $lapangan->nama_lapangan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="durasi_main">Durasi Main (Jam)</label>
                                <input type="number" class="form-control" id="durasi_main" name="durasi_main" placeholder="Masukkan Durasi Main" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <select class="form-control" id="waktu" name="waktu" required>
                                    <option>pilih waktu</option>
                                    <option value="pagi">Pagi</option>
                                    <option value="siang">Siang</option>
                                    <option value="malam">Malam</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a class="btn btn-dark" href="<?php echo site_url('beranda/reservasi') ?>">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


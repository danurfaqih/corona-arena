<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Reservasi </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('beranda/reservasi') ?>">Reservasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Reservasi</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Reservasi</h4>
                        <?php foreach ($tb_reservasi as $data) { ?>
                        <form class="forms-sample" action="<?php echo site_url('beranda/update_reservasi') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="id_reservasi">ID Reservasi</label>
                                    <input type="hidden" class="form-control" id="id_reservasi" name="id_reservasi" value="<?php echo $data->id_reservasi; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data->tgl_reservasi; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="customer">Customer</label>
                                    <select class="form-control" id="customer" name="customer">
                                        <option value="">--Pilih Customer--</option>
                                        <?php foreach ($tb_member as $member) : ?>
                                            <option value="<?php echo $member->id_member; ?>" <?php if ($member->id_member == $data->member_reservasi) echo 'selected="selected"'; ?>><?php echo $member->nama_member; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lapangan">Lapangan</label>
                                    <select class="form-control" id="lapangan" name="lapangan">
                                        <option value="">--Pilih Lapangan--</option>
                                        <?php foreach ($tb_lapangan as $lapangan) : ?>
                                            <option value="<?php echo $lapangan->id_lapangan; ?>" <?php if ($lapangan->id_lapangan == $data->lapangan_reservasi) echo 'selected="selected"'; ?>><?php echo $lapangan->nama_lapangan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="durasi_main">Durasi Main (Jam)</label>
                                    <input type="number" class="form-control" id="durasi_main" name="durasi_main" value="<?php echo $data->durasi_reservasi; ?>" placeholder="Masukkan Durasi Main">
                                </div>
                                <div class="form-group">
                                    <label for="waktu">Waktu</label>
                                    <select class="form-control" id="waktu" name="waktu">
                                        <option value="">--Pilih Waktu Main--</option>
                                        <option <?php if ($data->waktu_reservasi == 'Pagi') echo 'selected="selected"'; ?>>Pagi</option>
                                        <option <?php if ($data->waktu_reservasi == 'Siang') echo 'selected="selected"'; ?>>Siang</option>
                                        <option <?php if ($data->waktu_reservasi == 'Malam') echo 'selected="selected"'; ?>>Malam</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-dark" href="<?php echo site_url('beranda/reservasi') ?>">Cancel</a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

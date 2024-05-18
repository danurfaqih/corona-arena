<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('beranda/laporan') ?>">Laporan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Laporan</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive" id="filteredTable">
                            <?php
                            // Tanggal filter
                            $tgl_dari = isset($_GET['tgl_dari']) ? $_GET['tgl_dari'] : '';
                            $tgl_sampai = isset($_GET['tgl_sampai']) ? $_GET['tgl_sampai'] : '';
                            ?>
                            <div class="mb-4">
                                <h4 class="mb-3">Filter Laporan</h4>
                                <form action="<?= site_url('beranda/laporan') ?>" method="get">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="tgl_dari">Dari Tanggal</label>
                                            <input type="date" name="tgl_dari" id="tgl_dari" class="form-control">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="tgl_sampai">Sampai Tanggal</label>
                                            <input type="date" name="tgl_sampai" id="tgl_sampai" class="form-control">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="d-none d-md-block">&nbsp;</label>
                                            <button type="submit" class="btn btn-primary btn-block">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php if (!empty($tb_reservasi)) { ?>
                                <div class="header-print">
                                    <h2>Corona Arena</h2>
                                    <p>Hasil Filter Laporan Reservasi</p>
                                    <p>Tanggal: <?= $tgl_dari ?> - <?= $tgl_sampai ?></p>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Invoice</th>
                                            <th>Tanggal</th>
                                            <th>Customer</th>
                                            <th>Lapangan</th>
                                            <th>Durasi Main</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($tb_reservasi as $reservasi) { ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td>Invoice-<?= $reservasi->id_reservasi ?></td>
                                                <td><?= $reservasi->tgl_reservasi ?></td>
                                                <td><?= $reservasi->member_name ?></td>
                                                <td><?= $reservasi->lapangan_name ?></td>
                                                <td><?= $reservasi->durasi_reservasi ?></td>
                                                <td><?= $reservasi->waktu_reservasi ?></td>
                                            </tr>
                                            <?php $no++ ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- Tombol cetak hanya hasil filter laporan -->
                                <div class="text-right mt-4"> <!-- Mengubah margin-top menjadi mt-4 -->
                                    <button class="btn btn-outline-info btn-icon-text no-print mb-3" onclick="printFilteredTable()"><i class="mdi mdi-printer btn-icon-append"></i> Cetak Hasil Filter Laporan</button>
                                </div>
                            <?php } else { ?>
                                <p class="text-center">Tidak ada data reservasi yang ditemukan untuk rentang tanggal tersebut.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    // Fungsi untuk mencetak hanya tabel hasil filter laporan
    function printFilteredTable() {
        // Hapus bagian filter tanggal sebelum mencetak
        document.querySelectorAll('.mb-4').forEach(function(element) {
            element.style.display = 'none';
        });
        // Panggil fungsi window.print() untuk mencetak hanya tabel hasil filter laporan
        window.print();
    }
</script>

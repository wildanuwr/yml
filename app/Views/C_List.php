<?= $this->extend('includes/C_Template') ?>
<?= $this->section('konten') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List QR_CODE</h1>

    <!-- Tombol Ekspor ke Excel -->
    <a href="<?= base_url('list/export') ?>" class="btn btn-success mb-3">Ekspor ke Excel</a>

    <!-- Tabel QR Code -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar QR Code Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>QR Code</th>
                            <th>Serial</th>
                            <th>Total Scan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($produkList)) : ?>
                            <?php foreach ($produkList as $index => $produk) : ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= esc($produk['nama_produk']) ?></td>
                                    <td><a href="<?= esc($produk['qr_code']) ?>" target="_blank"><?= esc($produk['qr_code']) ?></a></td>
                                    <td><?= esc($produk['serial']) ?></td>
                                    <td><?= esc($produk['total_scan']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

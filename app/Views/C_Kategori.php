<?= $this->extend('includes/C_Template') ?>
<?= $this->section('konten') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Kategori dan Produk</h1>

    <!-- Tampilkan pesan error jika ada -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Tampilkan pesan sukses jika ada -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('kategori/store') ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input type="text" class="form-control" id="namaKategori" name="nama_kategori" required>
        </div>

        <div id="produkWrapper">
            <div class="form-group produk-item">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="nama_produk[]" required>
            </div>
        </div>

        <button type="button" class="btn btn-secondary" id="addProdukBtn">Tambah Produk</button>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>

<script>
    document.getElementById('addProdukBtn').addEventListener('click', function() {
        var produkWrapper = document.getElementById('produkWrapper');
        var produkItem = document.createElement('div');
        produkItem.classList.add('form-group', 'produk-item');
        produkItem.innerHTML = `
            <label for="namaProduk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk[]" required>
        `;
        produkWrapper.appendChild(produkItem);
    });
</script>

<?= $this->endSection() ?>

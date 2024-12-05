<?= $this->extend('includes/C_Template') ?>
<?= $this->section('konten') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Generate Serial dan URL Produk</h1>

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

    <form action="<?= base_url('produk/generate') ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="namaKategori">Pilih Kategori</label>
        <select class="form-control" id="namaKategori" name="kategori_id" required>
            <option value="" disabled selected>Pilih Kategori</option>
            <?php foreach ($kategori as $row): ?>
                <option value="<?= $row['nama_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="namaProduk">Nama Produk</label>
        <select class="form-control" id="namaProduk" name="nama_produk" required>
            <option value="" disabled selected>Pilih Produk</option>
        </select>
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah Produk yang akan di-generate</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" value="1" required>
    </div>

    <div class="form-group">
        <label for="foto">Foto Produk</label>
        <input type="file" class="form-control-file" id="foto" name="foto" required>
    </div>

    <button type="submit" class="btn btn-primary">Generate dan Simpan</button>
</form>


</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#namaKategori').change(function() {
            var kategori_id = $(this).val();

            if (kategori_id) {
                $.ajax({
                    url: '<?= base_url('produk/getProdukByKategori') ?>',
                    type: 'POST',
                    data: {kategori_id: kategori_id},
                    dataType: 'json',
                    success: function(data) {
                        $('#namaProduk').empty();
                        $('#namaProduk').append('<option value="" disabled selected>Pilih Produk</option>');
                        $.each(data, function(index, value) {
                            $('#namaProduk').append('<option value="' + value.trim() + '">' + value.trim() + '</option>');
                        });
                    },
                    error: function() {
                        alert('Gagal memuat produk');
                    }
                });
            } else {
                $('#namaProduk').empty();
                $('#namaProduk').append('<option value="" disabled selected>Pilih Produk</option>');
            }
        });
    });
</script>
<?= $this->endSection() ?>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah submit form langsung
        let formData = new FormData(this);

        fetch('<?= base_url('produk/generate') ?>', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(data => {
              console.log(data); // Tampilkan respons di console
          }).catch(error => {
              console.error('Error:', error);
          });
    });
</script>

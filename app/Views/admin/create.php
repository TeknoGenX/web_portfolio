<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<h3>Tambah Portofolio</h3>
<form action="<?= base_url('admin/portofolio/store') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
<?= $this->endSection() ?>

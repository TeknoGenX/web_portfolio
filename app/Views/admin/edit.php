<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<h3>Edit Portofolio</h3>
<form action="<?= base_url('admin/portofolio/update/' . $portofolio['id']) ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="<?= esc($portofolio['judul']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required><?= esc($portofolio['deskripsi']) ?></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar Lama</label><br>
        <img src="<?= base_url('uploads/' . $portofolio['gambar']) ?>" height="80">
    </div>
    <div class="mb-3">
        <label>Gambar Baru (opsional)</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>

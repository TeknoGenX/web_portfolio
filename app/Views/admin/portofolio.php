<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between mb-3">
    <h3>Data Portofolio</h3>
    <a href="<?= base_url('admin/portofolio/create') ?>" class="btn btn-success">+ Tambah</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($portofolios as $item): ?>
        <tr>
            <td><?= esc($item['judul']) ?></td>
            <td><?= esc($item['deskripsi']) ?></td>
            <td><img src="<?= base_url('uploads/' . $item['gambar']) ?>" height="60"></td>
            <td>
                <a href="<?= base_url('admin/portofolio/edit/' . $item['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="<?= base_url('admin/portofolio/delete/' . $item['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>

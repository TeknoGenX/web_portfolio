<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1 class="mb-4">Daftar Portofolio</h1>
    <div class="row">
        <?php foreach ($portofolios as $item): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('uploads/' . $item['gambar']) ?>" class="card-img-top" alt="<?= esc($item['judul']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($item['judul']) ?></h5>
                    <p class="card-text"><?= esc($item['deskripsi']) ?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
</body>
</html>

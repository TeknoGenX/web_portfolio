<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Admin Panel') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 56px; }
        .sidebar {
            height: 100vh;
            padding-top: 1rem;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: #e9ecef;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">Admin Panel</a>
        <a href="<?= base_url('admin/logout') ?>" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 sidebar">
            <a href="<?= base_url('admin/dashboard') ?>" class="<?= uri_string() === 'admin/dashboard' ? 'active' : '' ?>">Dashboard</a>
            <a href="<?= base_url('admin/portofolio') ?>" class="<?= uri_string() === 'admin/portofolio' ? 'active' : '' ?>">Kelola Portofolio</a>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

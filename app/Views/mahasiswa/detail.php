<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="navbar-brand mb-0 h1">Sistem Informasi Akademik</span>
            <div>
                <a href="/wildan-si-akademik/public/logout" class="btn btn-sm btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm" style="max-width: 500px; margin: 0 auto;">
            <div class="card-body">
                <h2 class="card-title mb-4">Detail Mahasiswa</h2>

                <?php if ($mahasiswa): ?>
                    <table class="table table-borderless mb-4">
                        <tr>
                            <th style="width: 120px;">NIM</th>
                            <td>: <?= htmlspecialchars($mahasiswa['nim']); ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>: <?= htmlspecialchars($mahasiswa['nama']); ?></td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td>: <?= htmlspecialchars($mahasiswa['prodi']); ?></td>
                        </tr>
                    </table>
                <?php else: ?>
                    <div class="alert alert-warning">Data mahasiswa tidak ditemukan.</div>
                <?php endif; ?>

                <a href="?url=mahasiswa" class="btn btn-secondary">&larr; Kembali</a>
                <a href="/wildan-si-akademik/public/dashboard" class="btn btn-outline-secondary">Dashboard</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
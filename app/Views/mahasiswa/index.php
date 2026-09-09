<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Sistem Informasi Akademik</span>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Data Mahasiswa</h2>
                <h6 class="card-subtitle mb-4 text-muted">Politeknik Negeri Jember</h6>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $mhs): ?>
                                <tr>
                                    <td><?= htmlspecialchars($mhs['nim']); ?></td>
                                    <td><?= htmlspecialchars($mhs['nama']); ?></td>
                                    <td><?= htmlspecialchars($mhs['prodi']); ?></td>
                                    <td class="text-center">
                                        <a href="?url=mahasiswa/detail&nim=<?= urlencode($mhs['nim']); ?>"
                                           class="btn btn-sm btn-outline-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <a href="?url=dosen" class="btn btn-secondary mt-3">Lihat Data Dosen</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
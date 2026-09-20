<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-4">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h1 class="h3 mb-4">Edit Dosen</h1>
                <?php if ($dosen): ?>
                    <form method="post" action="/si-akademik/public/dosen/update">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($dosen['id']); ?>">
                        <div class="mb-3">
                            <label for="nidn" class="form-label">NIDN</label>
                            <input type="text" id="nidn" name="nidn" class="form-control" value="<?= htmlspecialchars($dosen['nidn']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= htmlspecialchars($dosen['nama']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                            <input type="text" id="bidang_keahlian" name="bidang_keahlian" class="form-control" value="<?= htmlspecialchars($dosen['bidang_keahlian']); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="/si-akademik/public/dosen" class="btn btn-secondary">Batal</a>
                    </form>
                <?php else: ?>
                    <div class="alert alert-warning">Data dosen tidak ditemukan.</div>
                    <a href="/si-akademik/public/dosen" class="btn btn-secondary">Kembali</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
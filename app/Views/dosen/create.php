<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="navbar-brand mb-0 h1">Sistem Informasi Akademik</span>
            <a href="/wildan-si-akademik/public/logout" class="btn btn-sm btn-outline-light">Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title">Tambah Dosen</h2>
                <h6 class="card-subtitle mb-4 text-muted">Masukkan data dosen baru</h6>

                <form method="post" action="/wildan-si-akademik/public/dosen/store">
                    <div class="mb-3">
                        <label for="nidn" class="form-label">NIDN</label>
                        <input type="text" id="nidn" name="nidn" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                        <input type="text" id="bidang_keahlian" name="bidang_keahlian" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/wildan-si-akademik/public/dosen" class="btn btn-outline-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
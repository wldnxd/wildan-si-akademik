<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
                <h3>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>.</h3>
                <ul class="mt-4">
                    <li><a href="/wildan-si-akademik/public/mahasiswa">Mahasiswa</a></li>
                    <li><a href="/wildan-si-akademik/public/dosen">Dosen</a></li>
                    <li><a href="/wildan-si-akademik/public/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
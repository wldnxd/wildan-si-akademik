<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Dosen</title>
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
		<div class="card shadow-sm">
			<div class="card-body">
				<h2 class="card-title">Data Dosen</h2>
				<h6 class="card-subtitle mb-4 text-muted">Politeknik Negeri Jember</h6>

				<div class="table-responsive">
					<table class="table table-striped table-hover align-middle">
						<thead class="table-dark">
							<tr>
								<th>NIDN</th>
								<th>Nama</th>
								<th>Bidang Keahlian</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dosen as $item): ?>
								<tr>
									<td><?= htmlspecialchars($item['nidn']); ?></td>
									<td><?= htmlspecialchars($item['nama']); ?></td>
									<td><?= htmlspecialchars($item['bidang_keahlian']); ?></td>
									<td class="text-center">
										<a href="?url=dosen/detail&nidn=<?= urlencode($item['nidn']); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<a href="/wildan-si-akademik/public/dashboard" class="btn btn-outline-secondary mt-3">&larr; Dashboard</a>
				<a href="?url=mahasiswa" class="btn btn-secondary mt-3">Lihat Data Mahasiswa</a>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
require_once __DIR__ . '/../Models/Dosen.php';
class DosenController
{
 public function index()
 {
 global $pdo;
 $model = new Dosen($pdo);
 $dosen = $model->getAll();
 require_once __DIR__ . '/../Views/dosen/index.php';
 }
 public function detail()
 {
 global $pdo;
 $model = new Dosen($pdo);
 $nidn = $_GET['nidn'] ?? '';
 $dosen = $model->getByNidn($nidn);
 require_once __DIR__ . '/../Views/dosen/detail.php';
 }
 public function create()
 {
 require_once __DIR__ . '/../Views/dosen/create.php';
 }
 public function store()
 {
 global $pdo;
 $model = new Dosen($pdo);
 $model->create([
 'nidn' => $_POST['nidn'],
 'nama' => $_POST['nama'],
 'bidang_keahlian' => $_POST['bidang_keahlian']
 ]);
 header('Location: /si-akademik/public/dosen');
 exit;
 }
 public function edit()
 {
 global $pdo;
 $model = new Dosen($pdo);
 $id = $_GET['id'] ?? '';
 $dosen = $model->getById($id);
 require_once __DIR__ . '/../Views/dosen/edit.php';
 }
 public function update()
 {
 global $pdo;
 $model = new Dosen($pdo);
 $id = $_POST['id'] ?? '';
 $model->update($id, [
 'nidn' => $_POST['nidn'],
 'nama' => $_POST['nama'],
 'bidang_keahlian' => $_POST['bidang_keahlian']
 ]);
 header('Location: /si-akademik/public/dosen');
 exit;
 }
 public function delete($id)
 {
 global $pdo;
 $model = new Dosen($pdo);
 $model->delete($id);
 header('Location: /si-akademik/public/dosen');
 exit;
 }
}

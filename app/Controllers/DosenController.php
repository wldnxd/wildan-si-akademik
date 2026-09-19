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
}

<?php
class Dosen
{
 private $pdo;
 public function __construct($pdo)
 {
 $this->pdo = $pdo;
 }
 public function getAll()
 {
 $stmt = $this->pdo->query(
 "SELECT * FROM dosen ORDER BY nama ASC"
 );
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public function getByNidn($nidn)
 {
 $stmt = $this->pdo->prepare("SELECT * FROM dosen WHERE nidn = :nidn LIMIT 1");
 $stmt->execute(['nidn' => $nidn]);
 return $stmt->fetch(PDO::FETCH_ASSOC);
 }
}
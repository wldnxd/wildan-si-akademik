<?php

session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$url = trim($_GET['url'] ?? 'login', '/');

$mahasiswaController = new MahasiswaController();
$dosenController = new DosenController();
$authController = new AuthController();
$middleware = new AuthMiddleware();

if ($url == 'login') {
    $authController->loginForm();
} elseif ($url == 'login/process') {
    $authController->process();
} elseif ($url == 'logout') {
    $authController->logout();
} elseif ($url == 'dashboard') {
    $middleware->handle();
    require_once __DIR__ . '/../app/Views/dashboard/index.php';
} elseif ($url == 'mahasiswa') {
    $middleware->handle();
    $mahasiswaController->index();
} elseif ($url == 'mahasiswa/detail') {
    $middleware->handle();
    $mahasiswaController->detail();
} elseif ($url == 'dosen') {
    $middleware->handle();
    $dosenController->index();
} elseif ($url == 'dosen/detail') {
    $middleware->handle();
    $dosenController->detail();
} else {
    echo "404";
}
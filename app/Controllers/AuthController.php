<?php

class AuthController
{
    public function loginForm()
    {
        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function process()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === '12345') {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header('Location: /wildan-si-akademik/public/dashboard');
            exit;
        } else {
            $_SESSION['error'] = 'Username atau password salah.';
            header('Location: /wildan-si-akademik/public/login');
            exit;
        }
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: /wildan-si-akademik/public/login');
        exit;
    }
}
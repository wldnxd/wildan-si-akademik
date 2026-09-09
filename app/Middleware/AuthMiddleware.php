<?php

class AuthMiddleware
{
    public function handle()
    {
        if (empty($_SESSION['login'])) {
            header('Location: /wildan-si-akademik/public/login');
            exit;
        }
    }
}
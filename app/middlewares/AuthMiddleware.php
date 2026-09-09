<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            $_SESSION['login_message'] = '🔒 Please log in to access product management.';
            redirect('login');
        }

        return $next();
    }
}
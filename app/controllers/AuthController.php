<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function index()
    {
        $this->call->view('auth/login');
    }

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Simple hardcoded demo credential
        if ($username === 'gayuso' && $password === 'MCC2024-00026') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = 'Rick Keith Chezter M. Gayuso';
            redirect('products');
        } else {
            $_SESSION['login_message'] = '❌ Invalid username or password.';
            redirect('login');
        }
    }

    public function logout()
    {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user']);
        redirect('login');
    }
}
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        $required_code = 'GAYUSO-F1-2024';

        if (!isset($_SESSION['rkc_access_code']) || $_SESSION['rkc_access_code'] !== $required_code) {
            $_SESSION['access_message'] = '🔒 Access Restricted: Please click "Grant Access" first to view this profile.';
            redirect('student');
        }

        return $next();
    }
}
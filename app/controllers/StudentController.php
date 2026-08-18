<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data['page_title'] = "Gayuso's Student Hub";
        $data['is_logged_in'] = isset($_SESSION['rkc_access_code']) && $_SESSION['rkc_access_code'] === 'GAYUSO-F1-2024';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00026',
            'name'       => 'Rick Keith Chezter M. Gayuso',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F1',
            'email'      => 'rickgayuso@gmail.com',
            'hobbies'    => 'Coding, Gaming, Building small web projects',
            'quote'      => 'Consistency beats motivation.'
        ];

        $this->call->view('student_profile', $student);
    }

    public function login()
    {
        $_SESSION['rkc_access_code'] = 'GAYUSO-F1-2024';
        redirect('student');
    }

    public function logout()
    {
        unset($_SESSION['rkc_access_code']);
        redirect('student');
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        # code...
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        # code...
        $this->load->view('templates/auth_header');
        $this->load->view('auth/registration');
        $this->load->view('templates/auth_footer');
    }
}

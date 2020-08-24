<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Jabatan_model');
    }

    public function index()
    {
        # code...

        if ($this->session->userdata('email')) {
            # code...
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //success
            $this->_login();
        }
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {

            if (password_verify($pass, $user['password'])) {
                $data = [
                    'email' => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('Landing');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password!</div>');
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email Tidak Terdaftar</div>');
            redirect(base_url());
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        # code...
                        redirect('admin');
                    } else {
                        # code...
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This Email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not Registered</div>');
            redirect('auth');
        }
    }



    /*public function registration()
    {

        // if ($this->session->userdata('email')) {
        //     # code...
        //     redirect('user');
        // }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Ttl', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('no_hp_ortu', 'Nomor Hp Orang Tua', 'required|trim');
        $this->form_validation->set_rules('pilihan1', 'Pilihan1', 'required|trim');
        $this->form_validation->set_rules('pilihan2', 'Pilihan2', 'required|trim');
        if (empty($_FILES['foto']['name'])) {
            # code...
            $this->form_validation->set_rules('foto', 'Foto', 'required');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont rules',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            # code...
            $data['jabatan'] = $this->Jabatan_model->getAllJabatan();
            $data['sub_jabatan'] = $this->Jabatan_model->getAllSubJabatan();
            // var_dump($data['jabatan']); die;
            $data['title'] = '9G User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $setuju = $this->input->post('setuju');
            if (empty($setuju)) {
                $this->session->set_flashdata('popup', 'popup');
                redirect('auth/registration');
            }

            $uploadgambar = $_FILES['foto']['name'];
            // var_dump($uploadgambar);die;

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '9000';
                $config['upload_path'] = './assets/img/foto_peserta/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('image', $img);
                } else {
                    echo $this->upload->displays_errors();
                }
            }

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'ttl' => htmlspecialchars($this->input->post('ttl', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'p_ortu' => htmlspecialchars($this->input->post('pekerjaan', true)),
                'no_ortu' => htmlspecialchars($this->input->post('no_hp_ortu', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'pengalaman' => htmlspecialchars($this->input->post('pengalaman', true)),
                'prestasi' => htmlspecialchars($this->input->post('prestasi', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
                'pilihan1' => htmlspecialchars($this->input->post('pilihan1', true)),
                'sub_jabatan1' => htmlspecialchars($this->input->post('subjabatan1', true)),
                'pilihan2' => htmlspecialchars($this->input->post('pilihan2', true)),
                'sub_jabatan2' => htmlspecialchars($this->input->post('subjabatan2', true)),
                'unique_code' => $this->generateRandomString()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulations! your account has been created. Please Login</div>');
            redirect(base_url());
        }
    }*/

    function generateRandomString($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function logout()
    {
        # code...
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out</div>');
        redirect('auth');
    }

    public function login()
    {
        $this->load->view('login/login');
    }

    public function regis()
    {
        $this->load->view('regis/regis');
    }




    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}

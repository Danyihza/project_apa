<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $query = $this->db->query("SELECT * FROM user WHERE pilihan1='Ketua MPK' OR pilihan2='Ketua MPK'");
        // $data['ketum'] = $query->num_rows();
        $this->load->model('Jabatan_model', 'jabatan');

        $data['jabmpk'] = $this->jabatan->getAllJabatan();
        // var_dump($data['mpk']);die;

        $data['mpk'] = [
            $this->jabatan->getjabatan(1),
            $this->jabatan->getjabatan(2),
            $this->jabatan->getjabatan(3),
            $this->jabatan->getjabatan(4),
            $this->jabatan->getjabatan(5),
            $this->jabatan->getjabatan(6),
            $this->jabatan->getjabatan(7),
            $this->jabatan->getjabatan(8),
            $this->jabatan->getjabatan(9),
            $this->jabatan->getjabatan(10),
            $this->jabatan->getjabatan(11),
            $this->jabatan->getjabatan(12),
            $this->jabatan->getjabatan(13),
            $this->jabatan->getjabatan(14),
            $this->jabatan->getjabatan(15),
            $this->jabatan->getjabatan(16),
            $this->jabatan->getjabatan(17),
            $this->jabatan->getjabatan(18),
            $this->jabatan->getjabatan(19),
            $this->jabatan->getjabatan(20)
        ];

        // $data['osis'] = [
        //     'ketos' => $this->jabatan->getjabatan(7),
        //     'waketos' => $this->jabatan->getjabatan(8),
        //     'sekos' => $this->jabatan->getjabatan(9),
        //     'benos' => $this->jabatan->getjabatan(10),
        //     'sek1' => $this->jabatan->getjabatan(11),
        //     'sek2' => $this->jabatan->getjabatan(12),
        //     'sek3' => $this->jabatan->getjabatan(13),
        //     'sek4' => $this->jabatan->getjabatan(14),
        //     'sek5' => $this->jabatan->getjabatan(15),
        //     'sek6' => $this->jabatan->getjabatan(16),
        //     'sek7' => $this->jabatan->getjabatan(17),
        //     'sek8' => $this->jabatan->getjabatan(18),
        //     'sek9' => $this->jabatan->getjabatan(19),
        //     'sek10' => $this->jabatan->getjabatan(20)
        // ];

        $data['ketum'] = $this->jabatan->getjabatan(1);
        $data['waketum'] = $this->jabatan->getjabatan(2);
        $data['benm'] = $this->jabatan->getjabatan(3);
        $data['sekm'] = $this->jabatan->getjabatan(4);
        $data['koxi'] = $this->jabatan->getjabatan(5);
        $data['kox'] = $this->jabatan->getjabatan(6);
        $data['ketos'] = $this->jabatan->getjabatan(7);
        $data['waketos'] = $this->jabatan->getjabatan(8);
        $data['sekos'] = $this->jabatan->getjabatan(9);
        $data['benos'] = $this->jabatan->getjabatan(10);
        $data['sek1'] = $this->jabatan->getjabatan(11);
        $data['sek2'] = $this->jabatan->getjabatan(12);
        $data['sek3'] = $this->jabatan->getjabatan(13);
        $data['sek4'] = $this->jabatan->getjabatan(14);
        $data['sek5'] = $this->jabatan->getjabatan(15);
        $data['sek6'] = $this->jabatan->getjabatan(16);
        $data['sek7'] = $this->jabatan->getjabatan(17);
        $data['sek8'] = $this->jabatan->getjabatan(18);
        $data['sek9'] = $this->jabatan->getjabatan(19);
        $data['sek10'] = $this->jabatan->getjabatan(20);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {

        $data['title'] = 'Detail User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->db->order_by('name', 'asc');
        $data['User'] = $this->db->get_where('user', ['role_id' => 2])->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function org($id)
    {
        $res = $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
        $data['title'] = $res['jabatan'];
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->db->order_by('name', 'asc');
        $query = "SELECT * FROM user WHERE role_id='2' AND pilihan1='$id' OR pilihan2='$id'";
        $result = $this->db->query($query);
        $data['User'] = $result->result_array();
        // $data['User'] = $this->db->get_where('user', ['role_id' => 2])->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function changeStatus($id)
    {
        $this->load->library('user_agent');
        $rs = $this->db->get_where('user', ['id' => $id])->row_array();
        if ($rs['is_active'] == 1) {
            $this->db->where('id', $id);
            $this->db->update('user', ['is_active' => 2]);
            redirect($this->agent->referrer());
        } else {
            $this->db->where('id', $id);
            $this->db->update('user', ['is_active' => 1]);
            redirect($this->agent->referrer());
        }
    }

    public function delete($id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data has been deleted</div>');
        redirect('admin/detail');
    }

    public function edit($id)
    {
    }

    public function role()
    {
        # code...
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        # code...
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        # code...
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id

        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            # code...
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed!</div>');
    }
}

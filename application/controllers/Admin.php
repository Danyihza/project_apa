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

        $data['ketum'] = $this->jabatan->getjabatan('Ketua MPK');
        $data['waketum'] = $this->jabatan->getjabatan('Wakil Ketua MPK');
        $data['benm'] = $this->jabatan->getjabatan('Bendahara MPK');
        $data['sekm'] = $this->jabatan->getjabatan('Sekretaris MPK');
        $data['koxi'] = $this->jabatan->getjabatan('Koordinator Kelas XI');
        $data['kox'] = $this->jabatan->getjabatan('Koordinator Kelas X');
        $data['ketos'] = $this->jabatan->getjabatan('Ketua Osis');
        $data['waketos'] = $this->jabatan->getjabatan('Wakil Ketua Osis');
        $data['sekos'] = $this->jabatan->getjabatan('Sekretaris Osis');
        $data['benos'] = $this->jabatan->getjabatan('Bendahara Osis');
        $data['sek1'] = $this->jabatan->getjabatan('Sekbid Ketaqwaan');
        $data['sek2'] = $this->jabatan->getjabatan('Sekbid BPL-LH ');
        $data['sek3'] = $this->jabatan->getjabatan('Sekbid Akademik');
        $data['sek4'] = $this->jabatan->getjabatan('Sekbid Apresiasi dan Karya Seni');
        $data['sek5'] = $this->jabatan->getjabatan('Sekbid Jasmani');
        $data['sek6'] = $this->jabatan->getjabatan('Sekbid Jurnalistik');
        $data['sek7'] = $this->jabatan->getjabatan('Sekbid Berbangsa');
        $data['sek8'] = $this->jabatan->getjabatan('Sekbid Bela Negara');
        $data['sek9'] = $this->jabatan->getjabatan('Sekbid Wirausaha');
        $data['sek10'] = $this->jabatan->getjabatan('Sekbid Kerumahtanggaan');

            
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
        $this->db->order_by('name', 'asc');
        $data['User'] = $this->db->get_where('user', ['role_id' => 2])->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
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

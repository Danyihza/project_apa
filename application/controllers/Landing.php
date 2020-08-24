<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url());
        }
        $data['user'] = $this->db->get_where('user', ['user.email' => $this->session->userdata('email')])->row_array();
        $this->load->view('landing/landing', $data);
    }
    
    public function editData()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url());
        }
        $data['user'] = $this->db->get_where('user', ['user.email' => $this->session->userdata('email')])->row_array();
        $data['title'] = '9G User Validation';
        $this->load->view('templates/validation_header', $data);
        $this->load->view('validation/validation', $data);
        $this->load->view('templates/validation_footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        redirect(base_url());
    }

    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['user.email' => $this->session->userdata('email')])->row_array();
        $pengalaman = $this->input->post('pengalaman');
        $prestasi = $this->input->post('prestasi');

        $data = [
            'pengalaman' => $pengalaman,
            'prestasi' => $prestasi
        ];

        $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                # code...                
                $config['allowed_types'] = 'gif|jpg|jpeg|png|jfif';
                $config['max_size'] = '9000';
                $config['upload_path'] = './assets/img/foto_peserta/';

                $this->load->library('upload', $config);


                if ($this->upload->do_upload('foto')) {
                    # code...
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        # code...
                        unlink(FCPATH . 'assets/img/foto_peserta/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user', $data);

        $this->session->set_flashdata('done','done');
        redirect(base_url());
    }
}

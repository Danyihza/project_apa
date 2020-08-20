<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    public function getjabatan(String $nama)
    {
        # code...
        $query ="SELECT * FROM user WHERE role_id='2' AND pilihan1='$nama' OR pilihan2='$nama'";
        $result = $this->db->query($query);
        return $result->num_rows();
    }

    public function getAllJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function getAllSubJabatan()
    {
        return $this->db->get('sub_jabatan')->result_array();
    }
}

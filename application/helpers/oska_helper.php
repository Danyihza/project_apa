<?php 

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        # code...
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        
    }
}

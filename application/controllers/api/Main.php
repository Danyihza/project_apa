<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$email = $this->input->get('email');
        $data['user'] = $this->db->get_where('user',['email'=> $email])->row_array();
        // var_dump($data['user']);die;
        echo json_encode($data['user']);
	}

	public function hashPass()
	{
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = $this->db->get_where('user', ['email'=> $email])->row_array();

		if (password_verify($password,$data['password'])) {
			$rs = [
				'status' => 1,
				'data' => $data,
				'message' => 'success'
			];
			echo json_encode($rs);
		}else{
			$rs = [
				'status' => 0,
				'message' => 'wrong password'
			];
			echo json_encode($rs);
		}
	}
}

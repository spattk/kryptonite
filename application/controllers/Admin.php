<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('user_model');

	}

	public function index() {

		$check = $this->input->post('username');

		if(isset($check)){

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if( $this->user_model->checkLogin( $username, $password ) ){
				redirect( base_url() . 'dashboard');
			}

			else
			 redirect( base_url() . 'admin' );
		}


		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		$this->load->view('admin/admin', $data);
	}

	public function logout()
	{
		$this->user_model->logout();
		redirect( base_url() );
	}

}


 ?>
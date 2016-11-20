<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('user_model');

	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index()
	{
		$this->checkLogin();	

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '' , TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '' , TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '' , TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '' , TRUE);


		$this->load->view( 'admin/dashboard', $data );
	}
}
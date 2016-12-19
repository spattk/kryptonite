<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('user_model');

	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index() {
		show_404();	
	}

	public function addnew() {

		$this->checkLogin();

		$data['header'] = $this->load->view('admin/templates/dashboard-header-other', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/report-add-new', $data );
	}

}
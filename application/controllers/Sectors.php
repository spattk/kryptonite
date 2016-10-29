<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Sectors extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('sector_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function browse() {


		$sectors = array();
		$sectors = $this->sector_model->getSectors();

		$data['sectors'] = $sectors['sectors'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/sectors-browse', $data );
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/sectors-add-new', $data );
	}
}
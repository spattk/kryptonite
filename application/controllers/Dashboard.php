<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['header'] = $this->load->view('admin/templates/dashboard-header', '' , TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '' , TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '' , TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '' , TRUE);


		$this->load->view( 'admin/dashboard', $data );
	}
}
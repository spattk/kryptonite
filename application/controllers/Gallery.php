<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['nav'] = $this->load->view('templates/other-nav', '' , TRUE);
		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		$this->load->view( 'gallery/gallery', $data );
	}

	public function browse()
	{
		$this->load->view( 'admin/gallery-browse', $data );
	}

	public function addNew()
	{
		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);
		
		$this->load->view( 'admin/gallery-add-new', $data );
	}
}
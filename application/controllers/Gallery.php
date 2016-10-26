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
		$this->load->view( 'admin/gallery-add-new', $data );
	}
}
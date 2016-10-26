<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archives extends CI_Controller {

	public function index()
	{
		$data['nav'] = $this->load->view('templates/other-nav', '' , TRUE);
		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		$this->load->view( 'archives/archives', $data );
	}
}
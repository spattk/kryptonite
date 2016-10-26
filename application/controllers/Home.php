<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['nav'] = $this->load->view('templates/nav', '' , TRUE);
		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		$this->load->view( 'home/home', $data );
	}
}
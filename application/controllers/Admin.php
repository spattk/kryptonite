<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {

		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		$this->load->view('admin/admin', $data);
	}

}


 ?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('people_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/people-add-new', $data );
	}

	public function browse() {

		$peoples = array();
		$peoples = $this->people_model->getPeople();

		$data['peoples'] = $peoples['peoples'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/people-browse', $data );
	}

	public function edit( $people_id = NULL ) {

		// $this->checkLogin();

		if( $people_id != NULL )
		{
			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$data['people_id'] = $people_id;

			$response = $this->people_model->getPeopleById( $people_id );

			if( $response ) {

				$data['people_name'] = $response['people_name'];
				$data['people_desg'] = $response['people_desg'];
				$data['people_avatar'] = $response['people_avatar'];
				$data['people_speech'] = $response['people_speech'];

				$this->load->view( 'admin/people-edit', $data );
			}

			else {
				show_404();
			}

			
		}

		else
		{
			show_404();
		}
		
	}

}

?>
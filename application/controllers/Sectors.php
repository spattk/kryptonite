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

	public function edit ( $sector_id = NULL ) {

		if( $sector_id != NULL )
		{
			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$data['sector_id'] = $sector_id;

			$response = $this->sector_model->getSectorById( $sector_id );

			if( $response ) {

				$data['sector_name'] = $response['sector_name'];
				$data['sector_avatar'] = $response['sector_avatar'];
				$data['sector_captain_name'] = $response['sector_captain_name'];
				$data['sector_captain_phone'] = $response['sector_captain_phone'];
				$data['sector_captain_fb'] = $response['sector_captain_fb'];
				$data['sector_vc_name'] = $response['sector_vc_name'];
				$data['sector_vc_phone'] = $response['sector_vc_phone'];
				$data['sector_vc_fb'] = $response['sector_vc_fb'];
				$data['sector_details'] = $response['sector_details'];
				$data['sector_total_student'] = $response['sector_total_student'];
				$data['sector_location'] = $response['sector_location'];
				$data['sector_distance'] = $response['sector_distance'];
				$data['sector_achievements'] = $response['sector_achievements'];


				$this->load->view( 'admin/sectors-edit', $data );
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
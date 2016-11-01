<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('team_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/team-add-new', $data );
	}

	public function browse() {

		$teams = array();
		$teams = $this->team_model->getTeam();

		$data['teams'] = $teams['teams'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/team-browse', $data );
	}

	public function edit ( $post_holder_id = NULL ) {

		if( $post_holder_id != NULL )
		{
			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$data['post_holder_id'] = $post_holder_id;

			$response = $this->team_model->getTeamById( $post_holder_id );

			if( $response ) {

				$data['post_holder_name'] = $response['post_holder_name'];
				$data['post_holder_avatar'] = $response['post_holder_avatar'];
				$data['post_holder_post'] = $response['post_holder_post'];
				$data['post_holder_phone'] = $response['post_holder_phone'];
				$data['post_holder_fb'] = $response['post_holder_fb'];
				$data['post_holder_gmail'] = $response['post_holder_gmail'];
				
				$this->load->view( 'admin/team-edit', $data );
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
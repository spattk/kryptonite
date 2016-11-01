<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Collaborators extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('collaborators_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/collaborators-add-new', $data );
	}

	public function browse() {

		$collaborators = array();
		$collaborators = $this->collaborators_model->getCollaborators();

		$data['collaborators'] = $collaborators['collaborators'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/collaborators-browse', $data );
	}

	public function edit ( $collaborator_id = NULL ) {

		if( $collaborator_id != NULL )
		{
			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$data['collaborator_id'] = $collaborator_id;

			$response = $this->collaborators_model->getCollaboratorById( $collaborator_id );

			if( $response ) {

				$data['collaborator_name'] = $response['collaborator_name'];
				$data['collaborator_website'] = $response['collaborator_website'];
				

				$this->load->view( 'admin/collaborators-edit', $data );
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
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Collaborators extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('collaborators_model');
        $this->load->model('user_model');	
	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function addNew() {

		$this->checkLogin();

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/collaborators-add-new', $data );

		$check = $this->input->post('collaborator-name');

		if(isset($check)) {

			$add['collaborator-id'] = $this->input->post('collaborator-id');
			$add['collaborator-name'] =  $this->input->post('collaborator-name');
			$add['collaborator-website'] = $this->input->post('collaborator-website');

			$this->load->collaborators_model->addCollaborator( $add );
		}
	}

	public function browse() {

		$this->checkLogin();
		
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

			$check = $this->input->post('collaborator-name');

			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['collaborator_id'] = $collaborator_id;

				//New data fetched from the website form fields to be send to model
				$update['collaborator-id'] = $this->input->post('collaborator-id');
				$update['collaborator-name'] =  $this->input->post('collaborator-name');
				$update['collaborator-website'] = $this->input->post('collaborator-website');

				$this->load->collaborators_model->updateCollaborator( $update );

				$response = $this->collaborators_model->getCollaboratorById( $collaborator_id );

				if( $response ) {

					$data['collaborator_name'] = $response['collaborator_name'];
					$data['collaborator_website'] = $response['collaborator_website'];
					$data['collaborator_update_success'] = "Your post have been successfully updated.";
					

					$this->load->view( 'admin/collaborators-edit', $data );
				}

				else {
					show_404();
				}

			}

			else
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
				
			
		}

		else
		{
			show_404();
		}

	}

}

?>
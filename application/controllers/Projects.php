<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('projects_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/projects-add-new', $data );

		$check = $this->input->post('project-name');

		if(isset($check))
		{
			$add['project-name'] = $this->input->post('project-name');
			$add['project-desc'] = $this->input->post('project-desc');
			$add['project-gallery-link'] = $this->input->post('project-gallery-link');
			$add['project-type'] = $this->input->post('project-type');
			$add['uploadFile'] = $this->input->post('uploadFile');

			$this->load->projects_model->addProject( $add );
		}
	}

	public function browse() {

		$projects = array();
		$projects = $this->projects_model->getProjects();

		$data['projects'] = $projects['projects'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/project-browse', $data );
	}

	public function edit( $project_id = NULL ) {

		if( $project_id != NULL )
		{	
			// $this->checkLogin();
			$check = $this->input->post('project-title');

			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['project_id'] = $project_id;

				//New data fetched from the website form fields to be send to model
				$update['project-id'] = $this->input->post('project-id');
				$update['project-title'] =  $this->input->post('project-title');
				$update['project-desc'] = $this->input->post('project-desc');
				$update['project-gallery-link'] = $this->input->post('project-gallery-link');
				$update['project-type'] = $this->input->post('project-type');
				$update['uploadFile'] = $this->input->post('uploadFile');

				$this->load->projects_model->updateProject( $update );

				
				$response = $this->projects_model->getProjectById( $project_id );	

				if( $response ) {

				$data['project_title'] = $response['project_title'];
				$data['project_desc'] = $response['project_desc'];
				$data['project_avatar'] = $response['project_avatar'];
				$data['project_gallery_link'] = $response['project_gallery_link'];
				$data['project_update_success'] = "Your post has been successfully updated";

				$this->load->view( 'admin/project-edit', $data );
				}

				else {
					show_404();
				}			
			}

			//This is executed when the submit button is not pressed
			else {

				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['project_id'] = $project_id;

				$response = $this->projects_model->getProjectById( $project_id );

				if( $response ) {

					$data['project_title'] = $response['project_title'];
					$data['project_desc'] = $response['project_desc'];
					$data['project_avatar'] = $response['project_avatar'];
					$data['project_gallery_link'] = $response['project_gallery_link'];
					

					$this->load->view( 'admin/project-edit', $data );
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
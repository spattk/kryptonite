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

		// $this->checkLogin();

		if( $project_id != NULL )
		{
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

		else
		{
			show_404();
		}
		
	}
}

?>
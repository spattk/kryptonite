<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('event_model');	
	}

	public function index() {
		show_404();	// List of events can be displayed instead
	}

	public function browse() {

		$events = array();
		$events = $this->event_model->getEvents();

		$data['events'] = $events['events'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/events-browse', $data );
	}

	public function addNew() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/events-add-new', $data );
	}

	public function edit( $event_id = NULL ) {

		// $this->checkLogin();

		if( $event_id != NULL )
		{
			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$data['event_id'] = $event_id;

			$response = $this->event_model->getEventById( $event_id );

			if( $response ) {

				$data['event_name'] = $response['event_name'];
				$data['event_start_date'] = $response['event_start_date'];
				$data['event_end_date'] = $response['event_end_date'];
				$data['event_start_time'] = $response['event_start_time'];
				$data['event_end_time'] = $response['event_end_time'];
				$data['event_venue'] = $response['event_venue'];
				$data['event_blog_link'] = $response['event_blog_link'];

				$this->load->view( 'admin/events-edit', $data );
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
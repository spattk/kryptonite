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

		$check = $this->input->post('event-name');

		if(isset($check))
		{
			$add['event-name'] = $this->input->post('event-name');
			$add['event-venue'] = $this->input->post('event-venue');
			$add['event-start-date'] = $this->input->post('event-start-date');
			$add['event-start-time'] = $this->input->post('event-start-time');
			$add['event-end-date'] = $this->input->post('event-end-date');
			$add['event-end-time'] = $this->input->post('event-end-time');
			$add['event-blog'] = $this->input->post('event-blog');

			$this->load->event_model->addEvent( $add );
		}
	}

	public function edit( $event_id = NULL ) {

		// $this->checkLogin();

		if( $event_id != NULL )
		{
			$check = $this->input->post('title');
			//This part is executed when the submit button is pressed
			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['event_id'] = $event_id;

					//New data fetched from the website form fields to be send to model
					$update['event-id'] = $this->input->post('event-id');
					$update['title'] =  $this->input->post('title');
					$update['venue'] = $this->input->post('venue');
					$update['start-date'] = $this->input->post('start-date');
					$update['start-time'] = $this->input->post('start-time');
					$update['end-date'] = $this->input->post('end-date');
					$update['end-time'] = $this->input->post('end-time');
					$update['blog-link'] = $this->input->post('blog-link');

					$this->load->event_model->updateEvent( $update );

					$response = $this->event_model->getEventbyId( $event_id );

				if( $response ) {
					$data['event_name'] = $response['event_name'];
					$data['event_start_date'] = $response['event_start_date'];
					$data['event_end_date'] = $response['event_end_date'];
					$data['event_start_time'] = $response['event_start_time'];
					$data['event_end_time'] = $response['event_end_time'];
					$data['event_venue'] = $response['event_venue'];
					$data['event_blog_link'] = $response['event_blog_link'];
					$data['event_update_success'] = "Your post has been successfully updated";

					$this->load->view( 'admin/events-edit', $data );
				}

				else {
					show_404();
				}
	
			}

			//this part is executed when the submit button is not pressed 
			else 
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
			} // End of isset() else
			
		}

		else
		{
			show_404();
		}
		
	}


}

?>

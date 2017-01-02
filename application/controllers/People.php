<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('people_model');	
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

		$this->load->view( 'admin/people-add-new', $data );

		$check = $this->input->post('people-name');

		if(isset($check)) {

			$add['people-id'] = $this->input->post('people-id');
			$add['people-name'] =  $this->input->post('people-name');
			$add['people-desg'] = $this->input->post('people-desg');
			$add['people-speech'] = $this->input->post('people-speech');
			
			$config['upload_path']          = 'assets/img/people/'; //check this if any error
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config);
        
            if ( ! $this->upload->do_upload('uploadFile') ) {
                    // $error = array('error' => $this->upload->display_errors());
                	die(print_r($_POST));
                    // $this->load->view('upload_form', $error);
            }
            
            else {
                $add['uploadFile'] = $this->upload->data('file_name');
            }

			$this->load->people_model->addPeople( $add );

		}
	}

	public function browse( $var = false ) {

		$this->checkLogin();

		if( $var )
			$data['deleted'] = true;

		else
			$data['deleted'] = false;
		
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

		$this->checkLogin();

		if( $people_id != NULL )
		{
			$check = $this->input->post('people-name');

			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['people_id'] = $people_id;

				//New data fetched from the website form fields to be send to model
				$update['people-id'] = $this->input->post('people-id');
				$update['people-name'] =  $this->input->post('people-name');
				$update['people-desg'] = $this->input->post('people-desg');
				$update['people-speech'] = $this->input->post('people-speech');
				$update['uploadFile'] = $this->input->post('uploadFile');

				$this->load->people_model->updatePeople( $update );

				$response = $this->people_model->getPeopleById( $people_id );

				if( $response ) {

					$data['people_name'] = $response['people_name'];
					$data['people_desg'] = $response['people_desg'];
					$data['people_avatar'] = $response['people_avatar'];
					$data['people_speech'] = $response['people_speech'];
					$data['people_update_success'] = "Your post has been successfully updated";

					$this->load->view( 'admin/people-edit', $data );
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
						
		}

		else
		{
			show_404();
		}
		
	}

	public function delete ( $people_id ) {

		if( $people_id != NULL )
		$result = $this->people_model->deletePeopleById( $people_id );

		if( $result ) {

			redirect('people/browse/true');
		}
	}

	public function trash() {

		$this->checkLogin();

		$peoples = array();
		$peoples = $this->people_model->getTrashedPeople();

		$data['peoples'] = $peoples['peoples'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/people-trash', $data );	
	}

	public function untrash ( $people_id = NULL ) {

		$this->checkLogin();

		if( $people_id != NULL )
			$result = $this->people_model->untrashPeopleById( $people_id );

		if( $result ) {
			redirect('people/trash');
		}
	}

}

?>
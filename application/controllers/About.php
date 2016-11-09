<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('about_model');	
	}

	public function browse() {

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/about-browse', $data );
	}

	public function edit( $about_id = NULL ) {

		// $this->checkLogin();

		if( $about_id != NULL )
		{
			$check = $this->input->post('about-text');
			//This part is executed when the submit button is pressed
			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['about_id'] = $about_id;

				//New data fetched from the website form fields to be send to model
				$update['about-id'] = $this->input->post('about-id');
				$update['about-text'] = $this->input->post('about-text');		
				$this->load->about_model->updateAbout( $update );

				$response = $this->about_model->getAboutById( $about_id );

				if( $response ) {

					$data['about_text'] = $response['about_text'];
					$data['about_update_success'] = "Your post has been successfully updated";
					$this->load->view( 'admin/about-edit', $data );
					
				}

				else {
					show_404();
				}

			}

			//This is called when the submit button is not pressed
			else
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);
				$data['about_update_success'] = '';

				$data['about_id'] = $about_id;

				$response = $this->about_model->getAboutById( $about_id );

				if( $response ) {

					$data['about_text'] = $response['about_text'];
					$this->load->view( 'admin/about-edit', $data );
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
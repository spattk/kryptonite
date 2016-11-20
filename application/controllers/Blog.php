<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('blog_model');
        $this->load->model('user_model');	
	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function browse() {

		$this->checkLogin();

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/blog-browse', $data );
	}

	public function edit( $blog_id = NULL ) {

		$this->checkLogin();

		// $this->checkLogin();

		if( $blog_id != NULL )
		{
			$check = $this->input->post('blog-link');
			//This part is executed when the submit button is pressed
			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['blog_id'] = $blog_id;

				//New data fetched from the website form fields to be send to model
				$update['blog-id'] = $this->input->post('blog-id');
				$update['blog-link'] = $this->input->post('blog-link');		
				$this->load->blog_model->updateBlog( $update );

				$response = $this->blog_model->getBlogById( $blog_id );

				if( $response ) {

					$data['blog_link'] = $response['blog_link'];
					$data['blog_update_success'] = "Your post has been successfully updated";
					$this->load->view( 'admin/blog-edit', $data );
					
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

				$data['blog_id'] = $blog_id;

				$response = $this->blog_model->getBlogById( $blog_id );

				if( $response ) {

					$data['blog_link'] = $response['blog_link'];
					$data['blog_update_success'] = "Your post has been successfully updated";
					$this->load->view( 'admin/blog-edit', $data );
					
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
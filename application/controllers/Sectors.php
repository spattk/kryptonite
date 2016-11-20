<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Sectors extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('sector_model');	
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index( $sector ) {

		if($sector == NULL) {
			redirect(SITE_ROOT);
		}

		else{
		
			$sectors = array();
			$data['sectors'] = $this->sector_model->getSectorByName( $sector );

			$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
			$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
			$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
			$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

			$this->load->view( 'sectors/sectors', $data );
		}
		
	}

	public function browse() {

		$this->checkLogin();

		$sectors = array();
		$sectors = $this->sector_model->getSectors();

		$data['sectors'] = $sectors['sectors'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/sectors-browse', $data );
	}

	public function addNew() {

		$this->checkLogin();

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$this->load->view( 'admin/sectors-add-new', $data );

		$check = $this->input->post('sector-name');
		$slug = url_title($this->input->post('sector-name'),'dash',TRUE);


		if(isset($check)) {

			$add['sector-name'] = $this->input->post('sector-name');
			$add['sector-slug'] = $slug;
			$add['sector-captain'] = $this->input->post('sector-captain');
			$add['sector-captain-phone'] = $this->input->post('sector-captain-phone');
			$add['sector-captain-fb'] = $this->input->post('sector-captain-fb');
			$add['sector-vc'] = $this->input->post('sector-vc');
			$add['sector-vc-phone'] = $this->input->post('sector-vc-phone');
			$add['sector-vc-fb'] = $this->input->post('sector-vc-fb');
			$add['sector-about'] = $this->input->post('sector-about');
			$add['sector-achievements'] = $this->input->post('sector-achievements');
			$add['sector-total'] = $this->input->post('sector-total');
			$add['sector-distance'] = $this->input->post('sector-distance');
			$add['sector-location'] = $this->input->post('sector-location');
			// $add['uploadFile'] = $this->input->post('uploadFile');

			$config['upload_path']          = 'assets/img/portfolio/'; //check this if any error
            $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('uploadFile') )
                {
                        // $error = array('error' => $this->upload->display_errors());
                		// die(print_r($_POST));
                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $add['uploadFile'] = $this->upload->data('file_name');
                }

			$this->load->sector_model->addSector( $add );
		}
	}

	public function edit ( $sector_id = NULL ) {

		$this->checkLogin();

		if( $sector_id != NULL )
		{
			$check = $this->input->post('sector-name');

			if(isset($check))
			{
				$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
				$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
				$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
				$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

				$data['sector_id'] = $sector_id;

				//New data fetched from the website form fields to be send to model
				$update['sector-id'] = $this->input->post('sector-id');
				$update['sector-name'] =  $this->input->post('sector-name');
				$update['sector-captain'] = $this->input->post('sector-captain');
				$update['sector-vc'] = $this->input->post('sector-vc');
				$update['sector-captain-phone'] = $this->input->post('sector-captain-phone');
				$update['sector-captain-fb'] = $this->input->post('sector-captain-fb');
				$update['sector-vc-phone'] = $this->input->post('sector-vc-phone');
				$update['sector-vc-fb'] = $this->input->post('sector-vc-fb');
				$update['sector-about'] = $this->input->post('sector-about');
				$update['sector-achievements'] = $this->input->post('sector-achievements');
				$update['sector-total'] = $this->input->post('sector-total');
				$update['sector-distance'] = $this->input->post('sector-distance');
				$update['sector-location'] = $this->input->post('sector-location');
				$update['uploadFile'] = $this->input->post('uploadFile');

				$this->load->sector_model->updateSector( $update );

				$response = $this->sector_model->getSectorById( $sector_id );

				if( $response ) {

					$data['sector_name'] = $response['sector_name'];
					$data['sector_avatar'] = $response['sector_avatar'];
					$data['sector_captain_name'] = $response['sector_captain_name'];
					$data['sector_captain_phone'] = $response['sector_captain_phone'];
					$data['sector_captain_fb'] = $response['sector_captain_fb'];
					$data['sector_vc_name'] = $response['sector_vc_name'];
					$data['sector_vc_phone'] = $response['sector_vc_phone'];
					$data['sector_vc_fb'] = $response['sector_vc_fb'];
					$data['sector_details'] = $response['sector_details'];
					$data['sector_total_student'] = $response['sector_total_student'];
					$data['sector_location'] = $response['sector_location'];
					$data['sector_distance'] = $response['sector_distance'];
					$data['sector_achievements'] = $response['sector_achievements'];
					$data['sector_update_success'] = "Your post has been successfully updated";


					$this->load->view( 'admin/sectors-edit', $data );
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

				$data['sector_id'] = $sector_id;

				$response = $this->sector_model->getSectorById( $sector_id );

				if( $response ) {

					$data['sector_name'] = $response['sector_name'];
					$data['sector_avatar'] = $response['sector_avatar'];
					$data['sector_captain_name'] = $response['sector_captain_name'];
					$data['sector_captain_phone'] = $response['sector_captain_phone'];
					$data['sector_captain_fb'] = $response['sector_captain_fb'];
					$data['sector_vc_name'] = $response['sector_vc_name'];
					$data['sector_vc_phone'] = $response['sector_vc_phone'];
					$data['sector_vc_fb'] = $response['sector_vc_fb'];
					$data['sector_details'] = $response['sector_details'];
					$data['sector_total_student'] = $response['sector_total_student'];
					$data['sector_location'] = $response['sector_location'];
					$data['sector_distance'] = $response['sector_distance'];
					$data['sector_achievements'] = $response['sector_achievements'];
					$data['sector_avatar'] = $response['sector_avatar'];


					$this->load->view( 'admin/sectors-edit', $data );
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

	public function delete( $sector_id = NULL ) {

		if( $sector_id != NULL )
		$this->sector_model->deleteSectorById( $sector_id );
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('user_model');
        $this->load->model('report_model');
	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index() {
		show_404();	
	}

	public function addnew() {

		$this->checkLogin();

		$data['header'] = $this->load->view('admin/templates/dashboard-header-other', '', TRUE);			
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);
		$this->load->view( 'admin/report-add-new', $data );
		$slug = url_title($this->input->post('sector-name'),'dash',TRUE);

		$check = $this->input->post('sector-name');

		if(isset($check)) {

			$add['date'] = $this->input->post('date');
			$add['sector-name'] = $this->input->post('sector-name');
			$add['sector-slug'] = $slug;
			$add['reporter-name'] = $this->input->post('reporter-name');
			$add['mode'] = $this->input->post('mode');
			$add['total-students'] = $this->input->post('total-students');
			$add['hours'] = $this->input->post('hours');
			$add['problems'] = $this->input->post('problems');

			$members = array();

			$member_name = $this->input->post('tname');
			$member_year = $this->input->post('tyear');
			$student_name = $this->input->post('sname');
			$student_class = $this->input->post('sclass');
			$student_chapter = $this->input->post('schapter');
			$student_subject = $this->input->post('ssubject');

			for($i = 0; $i < count( $member_name ); $i++ ) {

				$members[$i]['name'] = $member_name[$i];
				$members[$i]['year'] = $member_year[$i];

				for($j = 0; $j < count( $student_name[$i] ); $j++ ) {

					// $members[$i]['teaching']['sname'][$j] = 
					// var_dump($student_name[$i][$j]);
					// var_dump($student_class[$i][$j]);
					// var_dump($student_chapter[$i][$j]);
					// var_dump($student_subject[$i][$j]);
					$members[$i]['teaching']['sname'][$j] = $student_name[$i][$j];
					$members[$i]['teaching']['sclass'][$j] = $student_class[$i][$j];
					$members[$i]['teaching']['schapter'][$j] = $student_chapter[$i][$j];
					$members[$i]['teaching']['ssubject'][$j] = $student_subject[$i][$j];
				}
			}

			// var_dump($member_name);
			// var_dump($student_name);
			// var_dump($members);
			// for($i = 0; $i < count( $member_name ); $i++ ) {
				
			// 	var_dump($members[$i]['teaching']['sname']);
			// }

			// var_dump(json_encode( $members ));

			$add['report-members'] = json_encode($members);

			$this->report_model->addReport($add);
		}

		else {

			
		}

		
	}

	public function view( $slug ) {

		$this->checkLogin();

		$reports = $this->report_model->getSectorReport( $slug );
		$data['reports'] = $reports['reports'];

		$data['header'] = $this->load->view('admin/templates/dashboard-header-other', '', TRUE);			
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);
		$this->load->view( 'admin/report-view', $data );

		
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('about_model');
		$this->load->model('blog_model');
		$this->load->model('collaborators_model');
		$this->load->model('event_model');
		$this->load->model('people_model');
		$this->load->model('projects_model');
        $this->load->model('sector_model');
        $this->load->model('team_model');	
	}

	public function index()
	{
		$data['nav'] = $this->load->view('templates/nav', '' , TRUE);
		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		//For showing the image carousel and text 


		//For showing about 
		$about = $this->load->about_model->getAbout();
		if( $about ) {

					$data['about'] = $about['about_text'];					
		}


		//For showing list of events 
		$events = $this->load->event_model->getEvents();
		$data['events'] = $events['events'];



		//For showing sectors 
		$sectors = $this->load->sector_model->getSectors();
		$data['sectors'] = $sectors['sectors'];


		//For showing projects 
		$projects = $this->load->projects_model->getProjects();
		$data['projects'] = $projects['projects'];


		//For showing post holders 
		$teams = $this->load->team_model->getTeam();
		$data['teams'] = $teams['teams'];

		//For showing people speaks 
		$peoples = $this->load->people_model->getPeople();
		$data['peoples'] = $peoples['peoples'];


		//For showing collaborators
		$collaborators = $this->collaborators_model->getCollaborators();
		$data['collaborators'] = $collaborators['collaborators'];


		$this->load->view( 'home/home', $data );
	}
}
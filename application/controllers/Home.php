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

	public function send_mail() { 
        
         $from_name = $this->input->post('name');
         $from_email = $this->input->post('email');
         $from_phone = $this->input->post('phone');
         $from_msg = $this->input->post('message');
         $from_subject = $this->input->post('subject');
        
         $to_email = "siteshpattanaik001@gmail.com";
    
         //Load email library 
         $this->load->library('email'); 
    
         $this->email->from($from_email, $from_name); 
         $this->email->to($to_email);
         $this->email->subject($from_subject); 
         $from_msg = $from_msg . ' Phone Number ' . $from_phone;
         $this->email->message($from_msg); 
    
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         
         
         $to_email = "samircool1996@gmail.com";
    
         $this->email->from($from_email, $from_name); 
         $this->email->to($to_email);
         $this->email->subject($from_subject); 
         $from_msg = $from_msg . ' Phone Number ' . $from_phone;
         $this->email->message($from_msg); 
    
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully.");
         
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email.");
         
         
         $to_email = "sahaa393@gmail.com";
    
         $this->email->from($from_email, $from_name); 
         $this->email->to($to_email);
         $this->email->subject($from_subject); 
         $from_msg = $from_msg . ' Phone Number ' . $from_phone;
         $this->email->message($from_msg); 
    
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully.");
         
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email.");
         
         redirect('');

      }
	
}
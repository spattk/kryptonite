<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('gallery_model');
        $this->load->model('user_model');	
	}

	/* Check if the user is authorized to access admin panel features */
	private function checkLogin() {
		
		if ( ! $this->user_model->isLoggedIn() )
			redirect( base_url() . 'admin' );

	}

	public function index()
	{
		$data['nav'] = $this->load->view('templates/other-nav', '' , TRUE);
		$data['footer'] = $this->load->view('templates/footer', '' , TRUE);

		//List all the available albums
		$albums = $this->gallery_model->getAlbumsAll();
		$data['albums'] = $albums['albums'];
		$this->load->view( 'gallery/gallery', $data );
	}

	public function browse()
	{	
		$this->checkLogin();

		$this->load->view( 'admin/gallery-browse', $data );
	}

	public function addNew()
	{
		$this->checkLogin();
		
		if(isset($_POST))
		var_dump($this->input->post());

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);
		
		$this->load->view( 'gallery/gallery-add-new', $data );
	}

	public function view( $slug ) {

		$images = array();

		$data['header'] = $this->load->view('admin/templates/dashboard-header', '', TRUE);
		$data['sidebar_menu'] = $this->load->view('admin/templates/sidebar-menu', '', TRUE);
		$data['sidebar_user_panel'] = $this->load->view('admin/templates/sidebar-user-panel', '', TRUE);
		$data['footer'] = $this->load->view('admin/templates/dashboard-footer', '', TRUE);

		$data['albums'] = $this->gallery_model->getImages( $slug );

		$this->load->view( 'gallery/gallery-redirect', $data );
	}
}

?>
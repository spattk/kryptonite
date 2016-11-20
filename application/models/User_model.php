<?php

class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function checkLogin( $username, $password ) {

		$this->db->select('user_id');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if ( $query->num_rows() == 1 )
		{
			$_SESSION['logged_in'] = true;
			return true;
		}

		else
		{
			$_SESSION['logged_in'] = '' ;
			return false;
		}
	}

	public function isLoggedIn() {

		if( isset( $_SESSION['logged_in'] ) )
			return true;

		else
			return false;
	}
	

	public function logout() {

		$_SESSION = array();
	}

}

?>
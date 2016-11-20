<?php

class About_model extends CI_Model {

	//Get the about us to show in the Home Page
	public function getAbout() {

		$this->db->select( 'about_id,about_text' );
		$this->db->order_by( 'about_id DESC' );
		$this->db->limit(1);

		$query = $this->db->get( 'about' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function getAboutbyId( $about_id ) {

		$this->db->where( 'about_id', $about_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'about' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function updateAbout ( $update = array() ) {

		$data = array(
	        'about_text' => $update['about-text']
		);

		$this->db->where('about_id', $update['about-id']);
		$this->db->update('about', $data);
	}
}

?>
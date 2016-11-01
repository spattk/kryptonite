<?php

class About_model extends CI_Model {

	//Get the about us to show in the Admin Panel
	public function getAbout() {

		$this->db->select( 't1.about_text' );
		$this->db->from( 'about t1' );
		$this->db->order_by( 't1.id DESC' );
		$this->db->limit(1);
	}

	public function getAboutbyId( $about_id ) {

		$this->db->where( 'about_id', $about_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'about' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}
}

?>
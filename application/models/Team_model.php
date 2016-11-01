<?php

class Team_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getTeam() {

		$teams = array();

		$this->db->select( 'post_holder_id, post_holder_name, post_holder_post, post_holder_phone, post_holder_fb' );
		$this->db->from( 'post_holders' );
	    $this->db->order_by( 'post_holder_id ' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $team['post_holder_id'] = $row['post_holder_id'];
	                $team['post_holder_name'] = $row['post_holder_name'];
	                $team['post_holder_post'] = $row['post_holder_post'];
	                $team['post_holder_phone'] = $row['post_holder_phone'];
	                $team['post_holder_fb'] = $row['post_holder_fb'];
	                array_push( $teams, $team );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'teams' => $teams );

	}

	public function getTeambyId( $post_holder_id ) {

		$this->db->where( 'post_holder_id', $post_holder_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'post_holders' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}
}

?>
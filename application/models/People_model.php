<?php

class People_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getPeople() {

		$peoples = array();

		$this->db->select( 'people_id, people_name, people_desg, people_speech' );
		$this->db->from( 'people' );
	    $this->db->order_by( 'people_id ' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $people['people_id'] = $row['people_id'];
	                $people['people_name'] = $row['people_name'];
	                $people['people_desg'] = $row['people_desg'];
	                $people['people_speech'] = $row['people_speech'];
	                array_push( $peoples, $people );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'peoples' => $peoples );

	}

	public function getPeoplebyId( $people_id ) {

		$this->db->where( 'people_id', $people_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'people' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}
}

?>
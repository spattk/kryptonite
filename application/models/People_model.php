<?php

class People_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getPeople() {

		$peoples = array();

		$this->db->select( 'people_id, people_name, people_desg, people_speech , people_avatar' );
		$this->db->from( 'people' );
		$this->db->where( 'people_trash', '0' );
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
	                $people['people_avatar'] = $row['people_avatar'];
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

	public function updatePeople( $update = array() ) {
				
			
		$data = array(
	        'people_name' => $update['people-name'],
			'people_desg' => $update['people-desg'],
			'people_avatar' => $update['uploadFile'] ,
			'people_speech' => $update['people-speech'] ,
			'people_avatar' => $update['uploadFile'] 
		);

		$this->db->where('people_id', $update['people-id']);
		$this->db->update('people', $data);

	}

	public function addPeople ( $add = array() ) {

		$data = array(
	        'people_name' => $add['people-name'],
			'people_desg' => $add['people-desg'],
			'people_avatar' => $add['uploadFile'] ,
			'people_speech' => $add['people-speech'] ,
			'people_avatar' => $add['uploadFile'] 
		);

		$this->db->insert('people', $data);
	}

	public function getTrashedPeople () {

		$peoples = array();

		$this->db->select( 'people_id, people_name, people_desg, people_speech' );
		$this->db->from( 'people' );
		$this->db->where( 'people_trash', '1' );
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

	public function deletePeopleById( $people_id ) {

		$this->db->set('people_trash', '1');
		$this->db->where('people_id', $people_id);
		$result = $this->db->update('people');

		return $result;
	}

	public function untrashPeopleById ( $people_id ) {


		$this->db->set('people_trash', '0');
		$this->db->where('people_id', $people_id);
		$result = $this->db->update('people');

		return $result;
	}
}

?>
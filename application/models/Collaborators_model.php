<?php

class Collaborators_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getCollaborators() {

		$collaborators = array();

		$this->db->select( 'collaborator_id, collaborator_name, collaborator_website' );
		$this->db->from( 'collaborators' );
		$this->db->where('collaborator_trash','0');
	    $this->db->order_by( 'collaborator_id ' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $collaborator['collaborator_id'] = $row['collaborator_id'];
	                $collaborator['collaborator_name'] = $row['collaborator_name'];
	                $collaborator['collaborator_website'] = $row['collaborator_website'];
	                array_push( $collaborators, $collaborator );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'collaborators' => $collaborators );

	}

	public function getCollaboratorbyId( $collaborator_id ) {

		$this->db->where( 'collaborator_id', $collaborator_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'collaborators' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function updateCollaborator( $update = array() ) {
				
			
		$data = array(
	        'collaborator_name' => $update['collaborator-name'],
			'collaborator_website' => $update['collaborator-website']
		);

		$this->db->where('collaborator_id', $update['collaborator-id']);
		$this->db->update('collaborators', $data);

	}

	public function addCollaborator ( $add = array() ) {

		$data = array(
	        'collaborator_name' => $add['collaborator-name'],
			'collaborator_website' => $add['collaborator-website']
		);

		$this->db->insert('collaborators', $data);
	}

	public function deleteCollaboratorById ( $collaborator_id ) {

		$this->db->set('collaborator_trash', '1');
		$this->db->where('collaborator_id', $collaborator_id);
		$result = $this->db->update('collaborators');

		return $result;
	}

	public function getTrashedCollaborators() {

		$collaborators = array();

		$this->db->select( 'collaborator_id, collaborator_name, collaborator_website' );
		$this->db->from( 'collaborators' );
		$this->db->where('collaborator_trash','1');
	    $this->db->order_by( 'collaborator_id ' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $collaborator['collaborator_id'] = $row['collaborator_id'];
	                $collaborator['collaborator_name'] = $row['collaborator_name'];
	                $collaborator['collaborator_website'] = $row['collaborator_website'];
	                array_push( $collaborators, $collaborator );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'collaborators' => $collaborators );
	}

	public function untrashCollaboratorById( $collaborator_id ) {

		$this->db->set('collaborator_trash', '0');
		$this->db->where('collaborator_id', $collaborator_id);
		$result = $this->db->update('collaborators');

		return $result;
	}
}

?>
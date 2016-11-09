<?php

class Projects_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getProjects() {

		$projects = array();

		$this->db->select( 'project_id, project_title, project_slug, project_desc, project_gallery_link' );
		$this->db->from( 'projects' );
	    $this->db->order_by( 'project_id ' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $project['project_id'] = $row['project_id'];
	                $project['project_title'] = $row['project_title'];
	                $project['project_desc'] = $row['project_desc'];
	                $project['project_gallery_link'] = $row['project_gallery_link'];
	                array_push( $projects, $project );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'projects' => $projects );

	}

	public function getProjectbyId( $project_id ) {

		$this->db->where( 'project_id', $project_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'projects' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function updateProject( $update = array() ) {
				
			
		$data = array(
	        'project_title' => $update['project-title'],
			'project_avatar' => $update['uploadFile'],
			'project_desc' => $update['project-desc'] ,
			'project_gallery_link' => $update['project-gallery-link'] 
		);

		$this->db->where('project_id', $update['project-id']);
		$this->db->update('projects', $data);

	}

	public function addProject( $add = array() ) {

		$data = array(

			'project_title' => $add['project-name'],
			'project_desc' => $add['project-desc'], 
			'project_avatar' => $add['uploadFile'],
			'project_gallery_link' => $add['project-gallery-link'],
		);

		$this->db->insert('projects',$data);
	}
}

?>
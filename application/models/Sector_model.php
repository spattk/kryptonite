<?php 

class Sector_model extends CI_Model {

	public function getSectors() {

		$sectors = array();

		$this->db->select('*');
		$this->db->from('sectors');
		$this->db->where('sector_trash', '0');
		$query = $this->db->get();
	    $total_rows = $this->db->count_all_results( '', false );

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $sector['sector_id'] = $row['sector_id'];
	                $sector['sector_slug'] = $row['sector_slug'];
	                $sector['sector_avatar'] = $row['sector_avatar'];
	                $sector['sector_name'] = $row['sector_name'];
	                $sector['sector_captain_name'] = $row['sector_captain_name'];
	                $sector['sector_vc_name'] = $row['sector_vc_name'];
	                $sector['sector_captain_phone'] = $row['sector_captain_phone'];


	                array_push( $sectors, $sector );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'sectors' => $sectors );

	}

	public function getSectorbyId( $sector_id ) {

		$this->db->where( 'sector_id', $sector_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'sectors' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function getSectorByName( $slug ) {

		$sectors = array();

		$this->db->where( 'sector_slug', $slug );
		$this->db->limit(1);
		$query = $this->db->get( 'sectors' );

	    if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	
	}

	public function getSectorStudents( $slug, $name, $class, $income, $category ) {

		$students = array();

		if( $name != NULL && $name != 'all' )
			$this->db->like('student_name', $name);

		if( $class != NULL && $class != 'all' )
			$this->db->where('student_class', $class);

		if( $income != NULL && $income != 'all' )
			$this->db->where('student_income <', $income);

		if( $category != NULL && $category != 'all' )
			$this->db->where('student_category' , $category);

		$this->db->select('student_id,student_name,student_class,student_class_year,student_income,student_category,student_category_certificate,student_aspire,student_voc_courses,student_other_talents,student_hobbies,student_performance');
		$this->db->from('students');
		$this->db->where('student_sector', $slug);

		$query = $this->db->get();
	    $total_rows = $this->db->count_all_results( '', false );

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $student['student_id'] = $row['student_id'];
	                $student['student_name'] = $row['student_name'];
	                $student['student_class'] = $row['student_class'];
	                $student['student_class_year'] = $row['student_class_year'];
	                $student['student_aspire'] = $row['student_aspire'];
	                $student['student_income'] = $row['student_income'];
	                $student['student_category'] = $row['student_category'];
	                $student['student_category_certificate'] = $row['student_category_certificate'];
	                $student['student_voc_courses'] = $row['student_voc_courses'];
	                $student['student_other_talents'] = $row['student_other_talents'];
	                $student['student_hobbies'] = $row['student_hobbies'];
	                $student['student_performance'] = $row['student_performance'];

	                array_push( $students, $student );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'students' => $students );

		
	}

	public function updateSector( $update = array() ) {
				
			
		$data = array(
	        'sector_name' => $update['sector-name'],
			'sector_captain_name' => $update['sector-captain'],
			'sector_vc_name' => $update['sector-vc'] ,
			'sector_captain_phone' => $update['sector-captain-phone'] ,
			'sector_captain_fb' => $update['sector-captain-fb'] ,
			'sector_vc_phone' => $update['sector-vc-phone'] ,
			'sector_vc_fb' => $update['sector-vc-fb'] ,
			'sector_details' => $update['sector-about'] ,
			'sector_achievements' => $update['sector-achievements'] ,
			'sector_total_student' => $update['sector-total'] ,
			'sector_distance' => $update['sector-distance'],
			'sector_location' => $update['sector-location'] ,
			'sector_avatar' => $update['uploadFile'] 
		);

		$this->db->where('sector_id', $update['sector-id']);
		$this->db->update('sectors', $data);

	}

	public function addSector( $add = array() ) {

		$data = array(

			'sector_name' => $add['sector-name'],
			'sector_slug' => $add['sector-slug'],
			'sector_captain_name' => $add['sector-captain'],
			'sector_captain_phone' => $add['sector-captain-phone'],
			'sector_captain_fb' => $add['sector-captain-fb'],
			'sector_vc_name' => $add['sector-vc'],
			'sector_vc_phone' => $add['sector-vc-phone'],
			'sector_vc_fb' => $add['sector-vc-fb'],
			'sector_details' => $add['sector-about'],
			'sector_distance' => $add['sector-distance'],
			'sector_location' => $add['sector-location'],
			'sector_achievements' => $add['sector-achievements'],
			'sector_avatar' => $add['uploadFile']  
		);

		// $config['upload_path'] = './uploads/test/';
		// $config['allowed_types']= 'gif|jpg|png';

		// $this->load->library('upload', $config);
		// $this->sector_model->addSector('uploadFile');

		$this->db->insert('sectors',$data);

		
	}

	public function deleteSectorById ( $sector_id ) {

		$this->db->set('sector_trash', '1');
		$this->db->where('sector_id', $sector_id);
		$result = $this->db->update('sectors');

		return $result;
	}

	public function getTrashedSectors() {

		$sectors = array();

		$this->db->select('*');
		$this->db->from('sectors');
		$this->db->where('sector_trash', '1');
		$query = $this->db->get();
	    $total_rows = $this->db->count_all_results( '', false );

	    

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $sector['sector_id'] = $row['sector_id'];
	                $sector['sector_slug'] = $row['sector_slug'];
	                $sector['sector_avatar'] = $row['sector_avatar'];
	                $sector['sector_name'] = $row['sector_name'];
	                $sector['sector_captain_name'] = $row['sector_captain_name'];
	                $sector['sector_vc_name'] = $row['sector_vc_name'];
	                $sector['sector_captain_phone'] = $row['sector_captain_phone'];


	                array_push( $sectors, $sector );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'sectors' => $sectors );

	}

	public function untrashSectorById( $sector_id ) {

		$this->db->set('sector_trash', '0');
		$this->db->where('sector_id', $sector_id);
		$result = $this->db->update('sectors');

		return $result;
	}
}



 ?>
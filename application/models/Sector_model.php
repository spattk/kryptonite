<?php 

class Sector_model extends CI_Model {

	public function getSectors() {

		$sectors = array();

		$this->db->select( 'sector_id,sector_name,sector_captain_name, sector_vc_name, sector_captain_phone' );
		$this->db->from( 'sectors' );
	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $sector['sector_id'] = $row['sector_id'];
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
}



 ?>
<?php 

class Sector_model extends CI_Model {

	public function getSectors() {

		$sectors = array();

		$this->db->select( 'sector_id,sector_name' );
		$this->db->from( 'sectors' );
	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $sector['sector_id'] = $row['sector_id'];
	                $sector['sector_name'] = $row['sector_name'];

	                array_push( $sectors, $sector );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'sectors' => $sectors );

	}
}



 ?>
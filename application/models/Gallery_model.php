<?php 

class Gallery_model extends CI_Model {

	public function getImages( $slug ) {

		$this->db->where( 'album_slug' , $slug );
		$query = $this->db->get('albums');

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Album doesn't exist
	}

	public function getAlbumsAll() {

		$albums = array();

		$this->db->select('*');
		$this->db->from('albums');
		$query = $this->db->get();
	    $total_rows = $this->db->count_all_results( '', false );

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $album['album_id'] = $row['album_id'];
	                $album['album_name'] = $row['album_name'];
	                $album['album_slug'] = $row['album_slug'];
	                $album['album_cover_image'] = $row['album_cover_image'];

	                array_push( $albums, $album );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'albums' => $albums );
	}
}




 ?>
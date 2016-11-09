<?php

class blog_model extends CI_Model {

	

	public function getBlogById( $blog_id ) {

		$this->db->where( 'blog_id', $blog_id );
		$this->db->limit( 1 );

		$query = $this->db->get( 'blog' );

		if ( $query || $query->num_rows() == 1 )
			return $query->row_array();
			
		return false;	// Post doesn't exist
	}

	public function updateBlog ( $update = array() ) {

		$data = array(
	        'blog_link' => $update['blog-link']
		);

		$this->db->where('blog_id', $update['blog-id']);
		$this->db->update('blog', $data);
	}
}

?>
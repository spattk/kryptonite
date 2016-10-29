<?php

class Event_model extends CI_Model {

	//Get the list of events to show in the Admin Panel
	public function getEvents() {

		$events = array();

		$this->db->select( 'event_id, event_name, event_slug, event_start_date, event_end_date, event_venue, event_blog_link' );
		$this->db->from( 'events' );
	    $this->db->order_by( 'event_start_date DESC' );

	    $total_rows = $this->db->count_all_results( '', false );

	    $query = $this->db->get();

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $event['event_id'] = $row['event_id'];
	                $event['event_name'] = $row['event_name'];
	                $event['event_start_date'] = $row['event_start_date'];
	                $event['event_end_date'] = $row['event_end_date'];
	                $event['event_venue'] = $row['event_venue'];
	                $event['event_blog_link'] = $row['event_blog_link'];

	                array_push( $events, $event );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'events' => $events );

	}
}

?>
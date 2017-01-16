<?php 

class Report_model extends CI_Model {

	public function addReport( $add = array() ) {

		$data = array(

			'report_date' => $add['date'],
			'report_sector_name' => $add['sector-name'],
			'report_sector_slug' => $add['sector-slug'],
			'report_name_of_member' => $add['reporter-name'],
			'report_mode_of_transport' => $add['mode'],
			'report_problem_faced' => $add['problem'],
			'report_no_of_students' => $add['total-students'],
			'report_duration_of_stay' => $add['hours'],
			'report_member_details' => $add['report-members']

			);
		$this->db->insert('reports', $data);
	}

	public function getSectorReport( $slug ) {

		$reports = array();

		$this->db->select('*');
		$this->db->from('reports');
		$this->db->where('report_sector_slug', $slug);
		$query = $this->db->get();
	    $total_rows = $this->db->count_all_results( '', false );

	    if ( $query ) {

	        if ( $query && $query->num_rows() > 0 ) {
	            foreach( $query->result_array() as $row ) {
	                $report['report_id'] = $row['report_id'];
	                $report['report_date'] = $row['report_date'];
	                $report['report_sector_name'] = $row['report_sector_name'];
	                $report['report_name_of_member'] = $row['report_name_of_member'];
	                $report['report_mode_of_transport'] = $row['report_mode_of_transport'];
	                $report['report_no_of_students'] = $row['report_no_of_students'];
	                $report['report_duration_of_stay'] = $row['report_duration_of_stay'];
	                $report['report_problem_faced'] = $row['report_problem_faced'];
	                $report['report_member_details'] = $row['report_member_details'];

	                array_push( $reports, $report );
	            }
	        }
	    }

	    return array( 'total_rows' => $total_rows, 'reports' => $reports );
	}
}


 ?>
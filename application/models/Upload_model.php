<?php

class Upload_model extends CI_Model {

	public function uploadTo( $dir, $imageVersions ) {
		$params = array();
        $params['options']['upload_dir'] = FCPATH . '/uploads/' . $dir . '/';
        $params['options']['upload_url'] = 'http://localhost/kryptonite/uploads/' . $dir . '/';
        $params['options']['image_versions'] = $imageVersions;
		$this->load->library( 'Uploadhandler', $params );
	}
}

?>
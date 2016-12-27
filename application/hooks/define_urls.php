<?php

function define_urls() {
	define( 'SITE_ROOT', 		base_url() );
	define( 'UPLOADS', 			base_url() .  'uploads/' );
	define( 'SITE_ROOT_ADMIN', 	base_url() . 'admin/' );
	define( 'ASSETS_URL', 		base_url() . 'assets/' );
	define( 'ASSETS_URL_ADMIN',	base_url() . 'assets/admin/' );
	define( 'GALLERY_URL_ADMIN', base_url() . 'assets/admin/gallery/' );
}

?>
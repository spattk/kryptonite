<!DOCTYPE html>
<html>
<head>
	<title>Gallery Category</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-dl-1.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-dl-2.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css"  rel="stylesheet" type="text/css" >
</head>

<body>
	<!-- Navigation -->
	<?php echo $nav ; ?>

	<div class="container gallery-mid">

		<?php if ( count($albums)==0 ): ?>
            <li>No Albums.</li>
        <?php endif; ?>

        <?php foreach( $albums as $album ) : ?>
		<div class="col-md-3 first">
			<a href="<?php echo SITE_ROOT?>gallery/view/<?php echo $album['album_slug']?>" >
				<img src="<?php echo GALLERY_URL_ADMIN?>img/<?php echo $album['album_cover_image'] ?>" width="100%" style="border: 5px solid black;padding: 5px;" >
			</a>
			<center><p><?php echo $album['album_name'] ?></p></center>
		</div>
		<?php endforeach; ?>
	</div>

	<!-- Footer -->
	<div style="position: absolute;bottom: 0;width: 100%">
	<?php echo $footer ; ?>
	</div>
</body>
</html>
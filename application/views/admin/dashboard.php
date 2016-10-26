<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AASRA Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/admin/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/admin/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/admin/css/skin-blue.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    
	<div class="wrapper">
		
		<!-- Main Header -->
		<?php echo $header; ?>
			
		<aside class="main-sidebar">

    		<section class="sidebar">

				<!--  Sidebar User Panel -->
				<?php echo $sidebar_user_panel ;?>
					
				<!-- Sidebar Menu -->
				<?php echo $sidebar_menu ;?>
		    </section>
		   
		</aside>

		<div class="content-wrapper">

				<!-- If want to use breadcrumb -->

			    <!-- Main content -->
			    <section class="content">
			      <!-- Your Page Content Here -->
			    </section>
		</div>
		
		<!-- Footer -->
		<?php echo $footer ?>

	</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/admin/js/app.min.js"></script> 
</body>

 
</html>
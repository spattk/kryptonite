<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AASRA Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo ASSETS_URL?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>css/skin-blue.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>css/jquery-ui.min.css">

</head>

<style type="text/css">
	#accordion h3.sector-name {
		font-size: 20px;
		border: 1px dotted black;
		padding: 10px;
		margin-top: 10px;
	}

	#accordion h3 {
		font-size: 20px;
	}
</style>

<body class="hold-transition skin-blue sidebar-mini">
	
  <div class="wrapper">
	
	<!-- Main Header -->
	<?php echo $header; ?>
	  
	<aside class="main-sidebar">
		<section class="sidebar">
			<!--  SIDEBAR USER PANEL -->
			<?php echo $sidebar_user_panel ;?>
			<!-- END SIDEBAR USER PANEL -->

			<!-- SIDEBAR MENU -->
			<?php echo $sidebar_menu ;?>
			<!-- END SIDEBAR MENU -->
		</section>
	</aside>

	<div class="content-wrapper">
		<!-- BREADCRUMB ON THE RIGHT SIDE TOP--> 
		<section class="content-header">
		   <h1>Browse<small>Sectors</small></h1>
			<!-- <ol class="breadcrumb">
				<li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
				<li><i class="fa fa-calendar"></i> Calendar</li>
				<li>Events</li>
				<li class="active">Add New</li>
			</ol> -->
		</section>
		<!-- END BREADCRUMBS -->

		<!-- MAIN CONTENT -->
		<section class="content">
			<div class="box-info">
				<div class="box-body">
					<table class="table table-bordered table-striped table-hover">
						<thead>
						  <tr>
							<th width="4%"> <input id="selectAll" type="checkbox"> </th>
							<th width="150px" bgcolor="gray">Sector</th>
							<th width="100px" bgcolor="red">Captain Name</th>
							<th width="100px" bgcolor="green">VC Name</th>
							<th width="50px" bgcolor="pink">Captain Phone</th>
						  </tr>
						  <tr class="bulk-actions collapse">
							  <td colspan="4">
							  <!-- <a class="btn btn-sm btn-danger btn-delete">Delete Selected</a> -->
							  </td>
						  </tr>
						</thead>
						<form id="sectors-list" method="post">
							<tbody>
							<?php if ( count($sectors)==0 ): ?>
							<tr><td></td><td>No Sectors.</td></tr>
							<?php endif; ?>

							<?php foreach( $sectors as $sector ) : ?>
							<tr class="more-options">
								<td></td>
								<td><?php echo $sector['sector_name']?></td>
								<td><?php echo $sector['sector_captain_name'] ?></td>
								<td><?php echo $sector['sector_vc_name'] ?></td>
								<td><?php echo $sector['sector_captain_phone'] ?></td>
							</tr>
							<tr class="hidden list-more-options" id="show-edit">
							  
							  <td></td>
							  <td colspan="2"><center><a href="<?php echo SITE_ROOT . 'sectors/edit/' . $sector['sector_id'] ?>" target="_blank"> Edit </a></center></td>
							  <td colspan="3"><center><a href="<?php echo SITE_ROOT . 'sectors/delete/' . $sector['sector_id'] ?>">Delete</a></center></td>
							  

							</tr>

							<?php endforeach; ?>
							</tbody>                          
						</form>
					</table>

				</div>
			</div>
		</section>
	</div>
	
	<!-- Footer -->
	<?php echo $footer;?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>

<script type="text/javascript">
			// Expand current navigation item
			var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Sectors")' ).parent().parent();
			var subListItem = listItem.find( 'ul li a:contains("Browse")' ).parent();
			listItem.addClass( 'active' );
			subListItem.addClass( 'active' );
</script>
<script type="text/javascript">
  $( "tr.more-options" ).click(function () {
  if ( $(this).closest('tr').next('tr').is( ":hidden" ) ) {
	  $(this).closest('tr').next('tr').removeClass("hidden"); // on click opening the required tr
	  $("tr.list-more-options").not($(this).closest('tr').next('tr')).addClass("hidden"); //for hiding others when opening this
  } 
  else {
	$(this).closest('tr').next('tr').addClass("hidden");
  }
});
</script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 
</body> 
</html>
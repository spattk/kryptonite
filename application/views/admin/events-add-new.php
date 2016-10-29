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
	.ui-datepicker {
		background: #3C8DBC;
		z-index: 1000;
		color: white;

	}

	a.ui-state-default {
		color: white;
	}
.ui-datepicker .ui-datepicker-next , .ui-datepicker .ui-datepicker-prev{
    background-color: white;
    opacity: 0.35;
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
           <h1>Add New<small>Events</small></h1>
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
                    <div class="form-group">
                    	<input type="text" name="" placeholder="Event Name" class="form-control input-lg">
                    </div>

                    <div class="form-group">
                    	<label>Venue</label>
                    	<input type="text" name="" placeholder="Event Venue" class="form-control ">
                    </div>

                    <div class="form-group">
                    	<label>Start Date and Time</label>
                    	<div class="row">
                    		<div class="col-xs-7">
                    			<div class="input-group">
                    				<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                    				</div>
                    				<input type="text" name="" placeholder="Start Date" class="form-control datepicker">
                    			</div>
                    			
                    		</div>
                    		<div class="col-xs-5">
                    			<div class="input-group">
                    				<div class="input-group-addon">
                    					<i class="fa fa-clock-o"></i>
                    				</div>
                    				<input type="text" name="" placeholder="Start Time(Optional) [24 hours clock]" class="form-control ">
                    			</div>
                    		</div>
                    	</div>
                    </div>

                    <div class="form-group">
                    	<label>End Date and Time</label>
                    	<div class="row">
                    		<div class="col-xs-7">
                    			<div class="input-group">
                    				<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                    				</div>
                    				<input type="text" name="" placeholder="End Date" class="form-control datepicker">
                    			</div>
                    			
                    		</div>
                    		<div class="col-xs-5">
                    			<div class="input-group">
                    				<div class="input-group-addon">
                    					<i class="fa fa-clock-o"></i>
                    				</div>
                    				<input type="text" name="" placeholder="End Time(Optional) [24 hours clock]" class="form-control">
                    			</div>
                    		</div>
                    	</div>
                    </div>

                    <div class="form-group">
                    	<label>Blog Link</label>
                    	<input type="text" name="" placeholder="Blog Link" class="form-control ">
                    </div>

                    
	               
                </div>
                <div class="form-group col-md-2 box-body">
		               <input type="submit" name="" value="Add" class="form-control btn btn-primary">
		            </div>
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer ?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 
<script type="text/javascript">
	$( function() {
		$(".datepicker").datepicker();
	} );
</script>
</body>

 
</html>
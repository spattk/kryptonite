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
           <h1>Add New<small>Sectors</small></h1>
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <input type="text" name="" placeholder="Sector Name" class="form-control input-lg">
                            </div>

                            <div class="form-group">
                                <label>Captain/ViceCaptain</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" name="" placeholder="Name of Captain" class="form-control">
                                    </div>

                                    <div class="col-xs-6">
                                        <input type="text" name="" placeholder="Name of Vice Captain" class="form-control">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label>Captain Details</label>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" name="" placeholder="Phone no" class="form-control">
                                    </div>
                                    <div class="col-xs-9">
                                        <input type="text" name="" placeholder="Facebook Id" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Vice Captain Details</label>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" name="" placeholder="Phone no" class="form-control">
                                    </div>
                                    <div class="col-xs-9">
                                        <input type="text" name="" placeholder="Facebook Id" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>About Sector</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            
                        </div>

                        <div class="col-md-4">
                            

                            <div class="form-group">
                                <label>Sector Details</label>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <input type="text" name="" placeholder="Total Students" class="form-control">
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="" placeholder="Distance from NIT in kms" class="form-control">
                                    </div>

                                    <div class="col-xs-12">
                                        <br>
                                        <input type="text" name="" placeholder="Location" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Achievements</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Sector Avatar</label>
                                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2 box-body">
                       <input type="submit" name="" value="Add" class="form-control btn btn-primary">
                    </div>
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer;?>

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
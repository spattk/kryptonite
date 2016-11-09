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

</head>

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
           <h1>Edit<small>About Us</small></h1>
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
            <form method="post" action="<?php echo SITE_ROOT . 'about/edit/' . $about_id ?>" name="post" id="aboutForm">
            <div class="box-info">
                <div class="box-body">
                    <input type="hidden" name="about-id" value="<?php echo $about_id; ?>">

                    <?php 
                        $check = $this->input->post('about-text');
                        if (isset($check))
                        {
                            echo 
                                '<div class="form-group" class="col-md-12" class="btn btn-success"                    style="background-color: green;padding: 10px;color: white" id="update-success">' ?>
                                    <?php echo $about_update_success; ?>
                                <?php echo '</div>';   
                        }
                    ?>

                    <div class="form-group">
                      <p><strong>Latest About Us</strong></p>
                      <textarea class="form-control" rows="5" name="about-text"><?php echo $about_text; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-2 box-body">
               <input type="submit" name="" value="Update" class="form-control btn btn-primary">
            </div>
            </form>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer ?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 
<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("About Us")' ).parent().parent();
            listItem.addClass( 'active' );
</script>

<script type="text/javascript"> 
    $(document).ready( function() {
        setTimeout(function() {
        $("#update-success").hide('blind', {}, 500)
    }, 5000);
});
</script>

<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script> 

</body>

 
</html>
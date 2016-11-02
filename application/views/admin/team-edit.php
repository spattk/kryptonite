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
    
    #imagePreview {
    width: 330px;
    height: 240px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
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
           <h1>Edit<small>Team</small></h1>
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
            <form>
            <div class="box-info">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <input type="text" name="" placeholder="Post Holder Name" class="form-control input-lg" value="<?php echo $post_holder_name; ?>">
                            </div>

                            <div class="form-group">
                                <label>Post</label>
                                <input type="text" name="" placeholder="Post" class="form-control" value="<?php echo $post_holder_post; ?>">
                            </div>

                            <div class="form-group">
                                <label>Post Holders Phone</label>
                                <input type="text" name="" placeholder="Phone No" class="form-control" value="<?php echo $post_holder_phone; ?>">
                            </div>

                            <div class="form-group">
                                <label>Facebook Id</label>
                                <input type="text" name="" placeholder="FB Id" class="form-control" value="<?php echo $post_holder_fb; ?>">
                            </div>

                            <div class="form-group">
                                <label>Gmail Id</label>
                                <input type="text" name="" placeholder="Gmail Id" class="form-control" value="<?php echo $post_holder_gmail; ?>">
                            </div>

                        </div>

                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label>Post Holder Avatar</label>
                                <input type="file" name="uploadFile" id="uploadFile" class="form-control">
                                <br>
                                <div id="imagePreview" class="col-xs-12"></div>
                            </div>                            
                        </div>

                        <div class="form-group col-md-2 box-body" >
                            <input type="submit" name="" value="Update" class="form-control btn btn-primary">
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer;?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>

<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Post Holders")' ).parent().parent();
            listItem.addClass( 'active' );
</script>

<script type="text/javascript">
    $(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 

</body>

 
</html>
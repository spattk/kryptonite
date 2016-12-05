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
           <h1>Browse<small>Events</small></h1>
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
                    <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th width="4%" bgcolor="#222D32" style="color: white"> <input id="selectAll" type="checkbox"> </th>
                            <th width="150px" bgcolor="#222D32" style="color: white">Name</th>
                            <th width="100px" bgcolor="#222D32" style="color: white">Start Date</th>
                            <th width="100px" bgcolor="#222D32" style="color: white">End Date</th>
                            <th width="50px" bgcolor="#222D32" style="color: white">Venue</th>
                            <th width="200px" bgcolor="#222D32" style="color: white">Blog Link</th>
                          </tr>
                          <tr class="bulk-actions collapse">
                              <td colspan="4">
                              <!-- <a class="btn btn-sm btn-danger btn-delete">Delete Selected</a> -->
                              </td>
                          </tr>
                        </thead>
                        <form id="events-list" method="post">

                            <?php 
                                if( $deleted ) {
                                  
                                  echo 
                                   '<div class="form-group" class="col-md-12" class="btn btn-success" style="background-color:green;padding:10px;color:white" id="delete-success">' ?>
                                                     <?php echo "Your post has been added to trash ." ?>
                                                  <?php echo '</div>';

                                                  echo
                                                  '<div class="form-group" class="col-md-12" class="btn btn-default" style="background-color:blue;padding: 10px;color: white" id="untrash-success">' ?>
                                                     <?php echo "Deleted by Mistake ?" ?>
                                                     <a href="<?php echo SITE_ROOT . 'events/trash' ?>" style="color: red; font-weight: bold" target="_blank">Untrash</a>
                                                  <?php echo '</div>'; 
                                               }  
                              ?>

                            <tbody>
                            <?php if ( count($events)==0 ): ?>
                            <tr><td></td><td>No events.</td></tr>
                            <?php endif; ?>

                            <?php foreach( $events as $event ) : ?>
                            <tr class="more-options">
                                <td></td>
                                <td><?php echo $event['event_name']?></td>
                                <td><?php echo $event['event_start_date'] ?></td>
                                <td><?php echo $event['event_end_date'] ?></td>
                                <td><?php echo $event['event_venue'] ?></td>
                                <td><?php echo $event['event_blog_link'] ?></td>

                            </tr>
                            <tr class="hidden list-more-options" id="show-edit">
                              
                              <td></td>
                              <td colspan="2"><center><a href="<?php echo SITE_ROOT . 'events/edit/' . $event['event_id'] ?>" target="_blank"> Edit </a></center></td>
                             <td colspan="3"><center><a href="javascript:void(0);" onclick="deleteConfirm(<?php echo $event['event_id']; ?>);">Delete</a></center></td>
                              

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
    <?php echo $footer ?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 
<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Events")' ).parent().parent();
            var subListItem = listItem.find( 'ul li a:contains("Browse")' ).parent();
            listItem.addClass( 'active' );
            subListItem.addClass( 'active' );
</script>

<script type="text/javascript"> 
      $(document).ready( function() {
        setTimeout(function() {
        $("#delete-success").hide('blind', {}, 500)
    }, 5000);
});
</script>


<script type="text/javascript"> 
      $(document).ready( function() {
        setTimeout(function() {
        $("#untrash-success").hide('blind', {}, 500)
    }, 10000);
});
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

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function deleteConfirm(id){
       var value = confirm("Do you want to delete this?")
        if ( value == true )
          window.location = url+"events/delete/"+id;
        else
          return false;
        } 
</script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script> 
</body>

 
</html>
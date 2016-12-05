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
           <h1>Browse<small>Collaborators</small></h1>
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
                            <th bgcolor="#222D32" style="color: white">Name</th>
                            <th bgcolor="#222D32" style="color: white">Webiste</th>
                          </tr>
                          <tr class="bulk-actions collapse">
                              <td colspan="4">
                              <!-- <a class="btn btn-sm btn-danger btn-delete">Delete Selected</a> -->
                              </td>
                          </tr>
                        </thead>
                        <form id="team-list" method="post">
                            <tbody>
                            <?php if ( count($collaborators)==0 ): ?>
                            <tr><td></td><td>No Collaborators.</td></tr>
                            <?php endif; ?>

                            <?php foreach( $collaborators as $collaborator ) : ?>
                            <tr class="more-options">
                                <td></td>
                                <td><?php echo $collaborator['collaborator_name']?></td>
                                <td><?php echo $collaborator['collaborator_website'] ?></td>
                            </tr>
                            <tr class="hidden list-more-options" id="show-edit">
                              
                              <td></td>
                              <td ><center><a href="<?php echo SITE_ROOT . 'collaborators/edit/' . $collaborator['collaborator_id'] ?>" target="_blank">Edit </a></center></td>
                              <td ><center><a href="<?php echo SITE_ROOT . 'collaborators/untrash/' . $collaborator['collaborator_id'] ?>">Untrash</a></center></td>
                              

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
<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Collaborators")' ).parent().parent();
            var subListItem = listItem.find( 'ul li a:contains("Trash")' ).parent();
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
</body>

 
</html>
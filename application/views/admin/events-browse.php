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
                            <th width="4%"> <input id="selectAll" type="checkbox"> </th>
                            <th width="150px" bgcolor="gray">Name</th>
                            <th width="100px" bgcolor="red">Start Date</th>
                            <th width="100px" bgcolor="green">End Date</th>
                            <th width="50px" bgcolor="pink">Venue</th>
                            <th width="200px" bgcolor="yellow">Blog Link</th>
                          </tr>
                          <tr class="bulk-actions collapse">
                              <td colspan="4">
                              <!-- <a class="btn btn-sm btn-danger btn-delete">Delete Selected</a> -->
                              </td>
                          </tr>
                        </thead>
                        <form id="events-list" method="post">
                            <tbody>
                            <?php if ( count($events)==0 ): ?>
                            <tr><td></td><td>No events.</td></tr>
                            <?php endif; ?>

                            <?php foreach( $events as $event ) : ?>
                            <tr>
                                <td></td>
                                <td><?php echo $event['event_name']?></td>
                                <td><?php echo $event['event_start_date'] ?></td>
                                <td><?php echo $event['event_end_date'] ?></td>
                                <td><?php echo $event['event_venue'] ?></td>
                                <td><?php echo $event['event_blog_link'] ?></td>
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
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script> 
</body>

 
</html>
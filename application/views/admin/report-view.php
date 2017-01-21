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

<body class="hold-transition skin-blue sidebar-mini sidebar-collapse" >
    
  <div class="wrapper">
    
    <!-- Main Header -->
    <?php echo $header; ?>
   
    <div class="content-wrapper">
        <!-- BREADCRUMB ON THE RIGHT SIDE TOP--> 
        <section class="content-header">
           <h1>View<small>Reports</small></h1>
        </section>
        <!-- END BREADCRUMBS -->

        <!-- MAIN CONTENT -->
        <section class="content">
            <?php foreach( $reports as $report ) : ?>
                <div style="border: 1px solid black;margin-bottom: 10px; background-color: white">
                    <h4>
                        <div class="container-fluid">
                            
                            <div class="col-md-3">
                                <strong>Sector Name : </strong><?php echo $report['report_sector_name'] ; ?> <br>
                            </div>

                            <div class="col-md-2">
                                <strong>Date : </strong><?php echo $report['report_date'] ; ?> <br>
                            </div>

                            <div class="col-md-3">
                                <strong>Mode of Transport : </strong><?php echo $report['report_mode_of_transport'] ; ?> <br>
                            </div>
                           
                            <div class="col-md-2">
                                <strong>Students : </strong><?php echo $report['report_no_of_students'] ; ?> <br>
                            </div>

                            <div class="col-md-2">
                                <strong>Duration : </strong><?php echo $report['report_duration_of_stay'] . ' hrs' ; ?> <br>
                            </div>
                            
                            <div style="clear: both; padding-top: 15px">
                                <strong>Members Details</strong>
                            </div>

                            <div>
                                <?php $var =  json_decode($report['report_member_details'], true); 
                                        
                                        foreach ($var as $member) {
                                            echo '<h4 style="text-transform: uppercase;color: red;padding-top:15px;"><strong>';
                                            echo $member['name']; 
                                            echo '</strong></h4>';
                                            $sname = $member['teaching']['sname'];                                            
                                            $sclass = $member['teaching']['sclass'];
                                            $schapter = $member['teaching']['schapter'];
                                            $ssubject = $member['teaching']['ssubject'];
                                            $sremark = $member['teaching']['sremark'];
                                            
                                            for($i=0; $i<count($sname);$i++) {

                                                echo '<div style="padding-bottom: 5px;">';
                                            
                                                echo '<div class="col-md-2" style="border: 1px dotted black">';
                                                if($sname[$i] == NULL)
                                                $sname[$i] = 'Whole';
                                                echo  '<strong>Name:</strong>  ' .  $sname[$i];
                                                echo '</div>';
                                                
                                                echo '<div class="col-md-1" style="border: 1px dotted black">';
                                                echo  '<strong>Class:</strong>  ' . $sclass[$i];
                                                echo '</div>';
                                                
                                                echo '<div class="col-md-2" style="border: 1px dotted black">';
                                                echo  '<strong>Subject:</strong>  ' . $ssubject[$i];
                                                echo '</div>';

                                                echo '<div class="col-md-3" style="border: 1px dotted black">';
                                                echo  '<strong>Chapter:</strong>  ' . $schapter[$i];
                                                echo '</div>';

                                                echo '<div class="col-md-4" style="border: 1px dotted black">';
                                                echo  '<strong>Remarks:</strong>  ' . $sremark[$i];
                                                echo '</div>';

                                                echo '</div>';
                                                
                                                echo '<br>';
                                                
                                            }
                                            
                                        }

                                    ?>
                            </div> 

                            <div class="form-group" style="padding-top: 10px;">
                                <label for="">Problems Faced : </label>
                                <?php echo $report['report_problem_faced'] ; ?>
                            </div>                           

                        </div>                        
                    </h4>
                </div>

            <?php endforeach; ?>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer;?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/report-add.js"></script>
</body>

 
</html>
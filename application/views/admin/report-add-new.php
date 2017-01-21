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

    .no-padding {
        padding-left: 0;
        padding-right: 0;
    }

    .top-padding {
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
        padding-right: 0;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>

<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    
  <div class="wrapper">
    
    <!-- Main Header -->
    <?php echo $header; ?>
   
    <div class="content-wrapper">
        <!-- BREADCRUMB ON THE RIGHT SIDE TOP--> 
        <section class="content-header">
           <h1>Add New<small>Report</small></h1>
        </section>
        <!-- END BREADCRUMBS -->

        <!-- MAIN CONTENT -->
        <section class="content">
            <form method="post" action="<?php echo SITE_ROOT . 'report/addnew'  ?>" id="report-add">
            <div class="box-info">
                            <?php 
                                $check = $this->input->post('sector-name');
                                if (isset($check))
                                {
                                    echo 
                                        '<div class="form-group" class="col-md-12" class="btn btn-success"                    style="background-color: green;padding: 10px;color: white" id="update-success">' ?>
                                            <?php echo "Your post has been successfully added ." ?>
                                        <?php echo '</div>';   
                                }
                            ?>
                <div class="form-group">
                    <div class="col-md-2 no-padding">
                        <label>Date</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date" placeholder="Date" class="form-control datepicker" >
                        </div>
                    </div>
                </div>

                <div class="form-group" style="clear: both; padding-top: 10px;">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Sector Name</label>
                            <input type="text" name="sector-name" class="form-control input-lg">
                        </div>
                        <div class="col-md-4">
                            <label>Name of members reporting</label>
                            <input type="text" name="reporter-name" class="form-control input-lg">
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Mode of Transportation</label>
                            <select class="form-control" name="mode">
                                <option value="">Select Mode</option>
                                <option value="auto">Auto</option>
                                <option value="cycle">Cycle</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>No of students (Optional) </label>
                            <input type="number" name="total-students" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Duration of stay (in hrs)</label>
                            <input type="number" name="hours" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Any problems faced</label>
                    <textarea name="problems" id="" rows="3" class="form-control"></textarea>
                </div>

                <div class="member-container">
                    <div class="member-box">
                        <div class="form-group" >
                            <div class="row" style="padding-bottom: 10px">
                                <div class="col-md-11" style="border: 2px solid black;padding: 10px;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name of the member</label>
                                                <input type="text" name="tname[]" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Year of study</label>
                                                <input type="text" name="tyear[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <strong>Teaching</strong>
                                    <div class="teaching-container">
                                        <div class="teaching-box" >
                                            <div class="form-group" style="padding-left: 25px;padding-top: 10px; padding-bottom: 10px">
                                                <div class="row" style="padding-bottom: 10px;">
                                                    <div class="col-md-11" style="border: 1px dotted black;padding: 10px; ">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Name of the student (if specific) </label>
                                                                    <input type="text" name="sname[0][]" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Class taught </label>
                                                                    <input type="number" name="sclass[0][]" class="form-control">
                                                                </div>
                                                            </div>                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Name of chapter taught </label>
                                                                    <input type="text" name="schapter[0][]" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Name of subject taught</label>
                                                                    <input type="text" name="ssubject[0][]" class="form-control">
                                                                </div>
                                                            </div>                                
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Remark</label>
                                                            <input type="text" name="sremark[0][]" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1" style="top: 205px;padding: 5px;">
                                                        <div class="input-group-btn">
                                                            <button type="button" data-name="0" class="btn btn-warning" onclick="addTeaching(this)" ><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- This is the problem so it needs to be added to the end of respective objects. -->
                                </div>
                                <div class="col-md-1" style=";padding-left: 5px;padding-right: 5px; top: 360px;">
                                    <div class="input-group top-padding" >

                                        <span class="input-group-addon  top-padding">
                                            <input name="count0" class="form-control input-sm" value="1" type="text" style="width: 50px;border-left: 1px;">
                                        </span>

                                        <div class="input-group-btn">
                                            <button type="button" data-name="" class="btn btn-primary" onclick="addMember(this)"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 no-padding">
                    <input type="submit" name="" class="btn btn-success form-control" value="Submit">
                    </div>
                </div>
                <br><br>

            </div>
            </form>
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
<script type="text/javascript">
    $( function() {
        $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).val();
    } );
</script>
<script type="text/javascript"> 
      $(document).ready( function() {
        setTimeout(function() {
        $("#update-success").hide('blind', {}, 500)
    }, 5000);
});
</script>
</body>

 
</html>
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

    #imgPreview {

        height: 200px;
        border: 1px solid black;
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
           <h1>Add New<small>Student</small></h1>
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
            <form method="post" action="<?php echo SITE_ROOT . 'events/addnew/' ?>">
            <div class="box-info">
                    <div class="box-body">
                       <!--  <?php 
                                $title = $this->input->post('event-name');
                                if (isset($title))
                                {
                                    echo 
                                        '<div class="form-group" class="col-md-12" class="btn btn-success"                    style="background-color: green;padding: 10px;color: white" id="update-success">' ?>
                                            <?php echo "Your post has been successfully added ." ?>
                                        <?php echo '</div>';   
                                }
                            ?> -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sector</label>
                                    <select class="form-control">
                                        <option value="">Select Sector</option>
                                        <option value="sector-2">Sector-2</option>
                                        <option value="sector-5">Sector-5</option>
                                        <option value="sector-6">Sector-6</option>
                                        <option value="sector-21">Sector-21</option>
                                        <option value="osap">OSAP</option>
                                        <option value="khalsa">Khalsa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Student Avatar</label>
                                    <input type="file" name="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Academic Year</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="imgPreview"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="number" name="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name of the school</label>
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>                            
                        </div>

                    <div class="sibling-box">
                        <div class="form-group">
                            <label>Siblings</label>
                            <div class="row">
                                <div class="col-md-10" style="border: 1px dotted black; padding-top: 10px;margin-left: 15px;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="input-group-btn" style="top: 25px;">
                                        <button type="button" class="btn btn-warning" onclick="addSibling(this)" ><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sibling-box-placeholder"></div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father's Occupation</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mother's Occupation</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Family Income</label>
                                    <select class="form-control">
                                        <option>Select Income</option>
                                        <option>Less than 1 Lakh</option>
                                        <option>1 Lakh - 2 Lakh</option>
                                        <option>2 Lakh - 3 Lakh</option>
                                        <option>4 Lakhs and above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="gen">General</option>
                                        <option value="obc">OBC</option>
                                        <option value="sc">SC</option>
                                        <option value="st">ST</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category Certificate available</label>
                                    <select class="form-control">
                                        <option>Certificate Available</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Any Major Health issues</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Aspire to be</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vocational Courses</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hobbies</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Other Talents</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Contact No. (atleast 2)</label>
                                    <input type="text" name="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Aadhar Available</label>
                                    <select class="form-control">
                                        <option>Aadhar Available</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Any other help required</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="performance-box">
                        <div class="form-group">
                            <label>Previous Performance</label>
                            <div class="row">
                                <div class="col-md-7" style="border: 1px dotted black; padding-top: 10px;margin-left: 15px">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Percentage</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="input-group-btn" style="top: 25px;">
                                        <button type="button" class="btn btn-warning" onclick="addPerformance(this)" ><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="performance-box-placeholder"></div>

                </div>
                          
            </div>
            <div class="form-group col-md-2 box-body">
		        <input type="submit" name="" value="Add" class="form-control btn btn-primary">
		    </div>
            <br><br>

            </form>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer ?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Student")' ).parent().parent();
            var subListItem = listItem.find( 'ul li a:contains("Add New")' ).parent();
            listItem.addClass( 'active' );
            subListItem.addClass( 'active' );
</script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/student-add.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 
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
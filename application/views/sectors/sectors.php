<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AASRA | NITR</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ASSETS_URL?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo ASSETS_URL?>css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo ASSETS_URL?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_URL?>css/font-dl-1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_URL?>css/font-dl-2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_URL?>css/custom.css"  rel="stylesheet" type="text/css" >

</head>
<body>
  <div>
        <div class="modal-content portfolio-modal">
            <div class="close-modal my-close-modal" data-dismiss="modal">
                <a href="<?php echo SITE_ROOT ?>">
                    <div class="lr">
                        <div class="rl">
                         
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="replace-close">
                      <center><a href="<?php echo SITE_ROOT ?>">Back to Home</a></center>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 style="text-align: center;"><?php echo $sectors['sector_name'];?></h2>
                            <hr class="star-primary">
                            <img src="<?php echo ASSETS_URL?>img/portfolio/<?php echo $sectors['sector_avatar'] ?>" class="img-responsive img-centered" alt="">
                            <br>
                            <p class="sector-postholder-details">
                                Captain: <?php echo $sectors['sector_captain_name'] ?>  <br>
                                Vice Captain: <?php echo $sectors['sector_vc_name'] ?> <br>
                            </p>
                            
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="container-fluid">
                <div class="sector-gen-details">
                    <p>                        
                        <strong>General Details of the workplace :</strong><br>
                        Total No of students : <?php echo $sectors['sector_total_student'] ?><br>
                        Location : <?php echo $sectors['sector_location'] ?><br>
                        Distance in kms : <?php echo $sectors['sector_distance'] ?><br>
                        Owner of the workplace :  <br>
                    </p>
                </div>

                <br>
                <div class="profiling">
                <div>
                    <h3 style="text-align: center;">Student Details</h3>
                    <br>
                      <center>

                        <div class="form-group col-md-2">
                          <input type="text" name="name" class="form-control" placeholder="Name ">
                        </div>
                        <div class="form-group col-md-2">
                          <input type="text" name="class" class="form-control" placeholder="Class ">
                        </div>

                        <div class="form-group col-md-2">
                          <input type="text" name="income" class="form-control" placeholder="Income ">
                        </div>

                        <div class="form-group col-md-2">
                          <input type="text" name="category" class="form-control" placeholder="Category ">
                        </div>

                        <div class="form-group col-md-2">
                          <button name="filter" type="button" class="btn btn-default form-control">Filter</button>
                        </div>

                        <div class="form-group col-md-2">
                          <button name="reset" type="button" class="btn btn-default form-control">Reset</button>
                        </div>

                      </center>
                      </div>
                        <!-- Accordion -->
                        <div class="panel-group" id="accordion" style="clear: both;">

                            <?php if ( count($students)==0 ): ?>
                                <p style="margin-left: 15px;">No students.</p>
                            <?php endif; ?>

                            <?php foreach( $students as $student ) : ?>
                                <div class="panel panel-default" >
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $student['student_id'] ?>">
                                                <table>
                                                    <tr>
                                                        <td class="col-md-4"> <?php echo $student['student_name'] ?> </td>
                                                        <td class="col-md-4"> Class : <?php echo $student['student_class'] ?> </td>
                                                    </tr>
                                                </table>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse<?php echo $student['student_id'] ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <h4 style="color: red">Aspire to be: <?php echo $student['student_aspire'] ?></h4> <br>

                                            <h5>
                                           
                                            <span style="color: blue">Vocational Courses</span> : <?php echo $student['student_voc_courses'] ?> <br><br>

                                            <span style="color: blue">Other Talents</span> : <?php echo $student['student_other_talents'] ?> <br><br>

                                            <span style="color: blue">Hobbies</span> : <?php echo $student['student_hobbies'] ?> <br><br>
                                            </h5>
                                        </div>
                                    </div>                            
                                </div>   
                            <?php endforeach; ?>

                            

                        </div>
                  </div>
                <br>
                <div class="achievements">
                    <h3>Achievements</h3>
                    <p><?php echo $sectors['sector_achievements'] ?></p>
                </div>

                <br>
                <div class="bottom-close-sector">
                      <center><a href="<?php echo SITE_ROOT ?>">Back to Home</a></center>
                </div>
            </div>
            <br>
            
            
            <br><br>
        </div>
    </div>

    <script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo ASSETS_URL?>js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo ASSETS_URL?>js/jqBootstrapValidation.js"></script>
    <script src="<?php echo ASSETS_URL?>js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo ASSETS_URL?>js/freelancer.min.js"></script>

    <script>
        $( 'button[name="filter"]' ).click(function() {

            var redirectTo = '';
            var check = [];
            var sname, sclass, sincome, scategory;
            if( $( 'input[name="name"]' ).val() != '' ) {
                sname = $( 'input[name="name"]' ).val() + '/';
                check.push(1);
            }

            else {
                sname = '';
                check.push(0);
            } 
                

            if( $( 'input[name="class"]' ).val() != '' ) {
                sclass = $( 'input[name="class"]' ).val() + '/';
                check.push(1);
            }

            else {
                sclass = '';
                check.push(0);
            }

            if( $( 'input[name="income"]' ).val() != '' ) {
                sincome = $( 'input[name="income"]' ).val() + '/';
                check.push(1);
            }

            else {
                sincome = '';
                check.push(0);
            }

            if( $( 'input[name="category"]' ).val() != '' ) {
                scategory = $( 'input[name="category"]' ).val() + '/';
                check.push(1);
            }

            else {
                scategory = '';
                check.push(0);
            }

            
            var lastIndex = check.lastIndexOf(1);
            var i;
            for( i = 0 ; (i < lastIndex) && (check[i] == 0) ; i++ ) {

                if ( i == 0 )
                    sname = 'all/';
                
                else if( i == 1 )
                    sclass = 'all/';

                else if ( i == 2 )
                    sincome = 'all/';

                else if ( i == 3 )
                    scategory = 'all/';
            }

            // console.log(check);
            // console.log(sname);
            // console.log(sclass);
            // console.log(sincome);
            // console.log(scategory);
            // console.log(lastIndex);

            redirectTo = '<?php echo SITE_ROOT; ?>sectors/index/'+ '<?php echo $sector_name;?>' + '/' + sname + sclass + sincome + scategory;

            window.location = redirectTo;

        });

        $( 'button[name="reset"]' ).click(function() {

            redirectTo = '<?php echo SITE_ROOT; ?>sectors/index/'+ '<?php echo $sector_name;?>' ;
            window.location  = redirectTo;  
        });
    </script>

    <script src="<?php echo ASSETS_URL_ADMIN; ?>plugins//ckeditor/ckeditor.js" type="text/javascript"></script>

</body>
</html>
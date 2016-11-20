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
                          <input type="text" name="" class="form-control" placeholder="Name ">
                        </div>
                        <div class="form-group col-md-2">
                          <input type="text" name="" class="form-control" placeholder="Class ">
                        </div>

                        <div class="form-group col-md-2">
                          <input type="text" name="" class="form-control" placeholder="Income ">
                        </div>

                        <div class="form-group col-md-2">
                          <input type="text" name="" class="form-control" placeholder="Category ">
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
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                      Collapsible Group 1</a>
                                  </h4>
                                </div>
                            
                              <div id="collapse1" class="panel-collapse collapse"> 
                                <!-- "in" is added in class to open it by default -->
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                              </div>

                          </div>

                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                          <table>
                                              <tr>
                                                  <td class="col-md-4">hi</td>
                                                  <td class="col-md-4">hello</td>
                                                  <td class="col-md-4">bi</td>
                                              </tr>
                                          </table>
                                      </a>
                                  </h4>
                              </div>

                              <div id="collapse2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.
                                  </div>
                              </div>                            
                          </div>

                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Collapsible Group 3</a>
                                  </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                      commodo consequat.
                                  </div>
                              </div>
                            </div>
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

</body>
</html>
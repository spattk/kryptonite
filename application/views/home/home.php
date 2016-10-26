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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-dl-1.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-dl-2.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css"  rel="stylesheet" type="text/css" >

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php echo $nav; ?>

    <!-- Header -->
    <header>
        <div class="container-fluid">
            <div class="row">             
                    
                <div id="home-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel" data-slide-to="1"></li>
                        <li data-target="#home-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/img/a.jpg" alt="...">
                            <div class="carousel-caption carousel-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets/img/b.jpg" alt="...">
                            <div class="carousel-caption carousel-text" >
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets/img/c.jpg" alt="...">
                            <div class="carousel-caption carousel-text" >
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </div>
                        </div>
                        
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
    </header>

    <!-- Events Section -->
    <section id="about">
        <div class="container">
            

            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>About Us</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div style="text-align: justify;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-12 text-center" id="events">
                            <h2>Events</h2>
                            <hr class="star-primary">
                        </div>
                        <div >
                            <!-- insert all the list which will be in round robin algorithm -->
                            <div style="max-height: 250px;font-size: 20px; " id="event-scroll">
                                <marquee direction="up" height="250px" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4">
                                    <ol>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>                                        
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                        <li><a href="">event</a></li>
                                    </ol>
                                </marquee>
                            </div>
                            
                        </div>
                    </div>
                    <!-- <img src="assets/img/1-375.jpg" width="100%"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors Section -->
    <section id="sectors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sectors</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

                <div class="col-sm-4 portfolio-item">
                    <a href="sector2.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a href="sector5.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="sector6.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="sector21.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="osap.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="khalsa.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-external-link fa-2x"></i>
                            </div>
                        </div>
                        <img src="assets/img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Projects</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link pro-section" data-toggle="modal">
                       <img src="assets/img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                    <br>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link pro-section" data-toggle="modal">
                        <img src="assets/img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                    <br>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link pro-section" data-toggle="modal">
                        <img src="assets/img/portfolio/circus.png" class="img-responsive" alt="">
                    </a><br>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link pro-section" data-toggle="modal">
                        <img src="assets/img/portfolio/game.png" class="img-responsive" alt="">
                    </a><br>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link pro-section" data-toggle="modal">
                        <img src="assets/img/portfolio/safe.png" class="img-responsive" alt="">
                    </a><br>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link pro-section" data-toggle="modal">
                        <img src="assets/img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a><br>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- Team Section -->
    <section class="success" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Team</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>President</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                <div class="col-md-4">
                    <p>VP</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                <div class="col-md-4">
                    <p>Gen Sec 1</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                <div class="col-md-4">
                    <p>Gen sec 2</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                <div class="col-md-4">
                    <p>tech sec</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                <div class="col-md-4">
                    <p>treasurer</p>
                    <img src="assets/img/1-375.jpg" width="100%">
                </div>
                
            </div>
        </div>
    </section>

    <!-- People Section -->
    <section id="people">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>People Speak</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br>
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active people-li"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="people-li"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="people-li"></li>
                    </ol>

                  <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    
                        <div class="item active">
                            <div >
                                <img src="assets/img/1-375.jpg" alt="..." ">
                            </div>

                            <div class="carousel-caption col-md-5 col-md-offset-2 people-cap" >
                                <h4>Diro's speak</h4>
                                <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </div>
                        </div>
                        
                        <div class="item">
                            <img src="assets/img/2-375.jpg" alt="...">
                            <div class="carousel-caption col-md-5 col-md-offset-2 people-cap">
                                <h4>Diro's speak</h4>
                                <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </div>
                        </div>

                        <div class="item">
                             <img src="assets/img/4-375.jpg" alt="...">
                            <div class="carousel-caption col-md-5 col-md-offset-2 people-cap" >
                                <h4>Diro's speak</h4>
                                <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="col-md-6">  
                <div class="row">
                    <div class="col-lg-8 text-center">
                        <h2>Contact Us</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 ">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
                        <div>
                            <ul class="list-inline contact-icons my-contact-icons">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-12 text-center" id="collaborators">
                        <h2 id="">Collaborators</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div style="text-align: center;">
                     <a href=""><h4>Its me</h4></a>
                     <br>
                     <a href=""><h4>Its me</h4></a>
                     <br>
                     <a href=""><h4>Its me</h4></a>
                     <br>
                     <a href=""><h4>Its me</h4></a>
                     <br>
                     <a href=""><h4>Its me</h4></a>
                     <br>
                     <a href=""><h4>Its me</h4></a>
                </div>
                
            </div>   

        </div>
    </section>

    <!-- Footer -->
    <?php echo $footer; ?>

    
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <h4>General Description of Project</h4>
                            <p class="project-desc">Use this area of the page to describe your project. The icon above is part of a free icon set by On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>

                            <br>
                            <div class="project-extra-desc">
                                <p>Start Date : </p>
                                <p>End Date : </p>
                                <p>Venue : </p>
                                <p>Link to blog : </p>
                                <p>View more images : </p>
                            </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

    <!-- custom script -->
    <script src="assets/js/script.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AASRA Album <?php echo $albums['album_name'] ?></title>
        <link href="<?php echo GALLERY_URL_ADMIN?>css/lightgallery.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo ASSETS_URL?>css/bootstrap.min.css">
        <style type="text/css">
            body{
                background-color: #152836
            }
            .demo-gallery > ul {
              margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
              border: 3px solid #FFF;
              border-radius: 3px;
              display: block;
              overflow: hidden;
              position: relative;
              float: left;
            }
            .demo-gallery > ul > li a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
              height: 48px;
              margin-left: -24px;
              margin-top: -24px;
              opacity: 0.8;
              width: 48px;
            }
            .demo-gallery.dark > ul > li a {
              border: 3px solid #04070a;
            }
            .home .demo-gallery {
              padding-bottom: 80px;
            }
        </style>
        <script src="<?php echo ASSETS_URL ?>js/jquery.min.js"></script>
    </head>
    <body class="home">
        <div style="font-size: 20px;" class="pull-right">
            <a href="<?php echo SITE_ROOT ?>gallery" style="color: white; padding-right: 20px;">BACK</a>
        </div>

        <center><h2 style="color: white"><?php echo $albums['album_name'] ?></h2></center>
        <div class="demo-gallery">
            
            <ul id="lightgallery" class="list-unstyled row" style="margin-left: 25px;">
                    
                    <?php 
                        $images = json_decode($albums['album_pictures']);
                        $count = sizeof($images);
                        for ($i=0; $i < $count ; $i++) { 

                                $ext = substr($images[$i], -3);
                                $img = substr($images[$i], 0, strpos($images[$i], '.'));
                            ?>               
                   
                            <li data-responsive="<?php echo GALLERY_URL_ADMIN ?>img/<?php echo $img?>-375.<?php echo $ext ?> 375, img/<?php echo $img?>-480.<?php echo $ext ?> 480, img/<?php echo $img?>.<?php echo $ext ?> 800" data-src="<?php echo GALLERY_URL_ADMIN ?>img/<?php echo $img?>-1600.<?php echo $ext ?>"  >
                                <a href="">
                                    <img class="img-responsive" src="<?php echo GALLERY_URL_ADMIN ?>img/<?php echo $img ?>.<?php echo $ext ?>">
                                </a>
                            </li>

                        <?php } ?>
            </ul>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/picturefill.min.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lightgallery.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-fullscreen.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-thumbnail.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-video.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-autoplay.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-zoom.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-hash.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/lg-pager.js"></script>
        <script src="<?php echo GALLERY_URL_ADMIN ?>js/jquery.mousewheel.min.js"></script>
    </body>
</html>

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
  <!-- Generic page styles -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>gallery/css/style.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>css/jquery-ui.min.css">
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>gallery/css/jquery.fileupload.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>gallery/css/jquery.fileupload-noscript.css">
  <!-- CSS adjustments for browsers with JavaScript disabled -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>gallery/css/jquery.fileupload-ui.css">
  <link rel="stylesheet" href="<?php echo ASSETS_URL_ADMIN?>gallery/css/jquery.fileupload-ui-noscript.css">



</head>

<style type="text/css">

    #imagePreview {
    width: 330px;
    height: 240px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
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
           <h1>Add New<small>Gallery</small></h1>
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
                    <div class="row">
                        <div class="col-md-8">
                            
                            <div class="form-group">
                                <input type="text" name="" class="form-control input-lg" placeholder="Gallery-Name">
                            </div>

                        </div>

                        <div class="col-md-4">
                        
                            <div class="form-group">
                                <label>Gallery Cover Pic</label>
                                <input type="file" name="uploadFile" id="uploadFile" class="form-control">
                                <br>
                                <div id="imagePreview" class="col-xs-12"></div>
                            </div>

                           
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <?php echo $footer;?>

  </div>

<script src="<?php echo ASSETS_URL?>js/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/app.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>js/jquery-ui.min.js"></script> 

<script type="text/javascript">
    $(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script type="text/javascript">
            // Expand current navigation item
            var listItem = $( 'ul.sidebar-menu' ).find( 'li span:contains("Gallery")' ).parent().parent();
            var subListItem = listItem.find( 'ul li a:contains("Add New")' ).parent();
            listItem.addClass( 'active' );
            subListItem.addClass( 'active' );
</script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/canvas-to-blob.min.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.fileupload.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.fileupload-image.js"></script>  
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.fileupload-process.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.fileupload-ui.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.fileupload-validate.js"></script>
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.iframe-transport.js"></script> 
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/jquery.ui-widget.js"></script>  
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/load-image.all.min.js"></script> 
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/main.js"></script>  
<script src="<?php echo ASSETS_URL_ADMIN?>gallery/js/tmpl.min.js"></script>  
</body>

 
</html>
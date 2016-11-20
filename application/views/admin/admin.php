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
<body>
    <div class="container">
        <br>
        <center><h1>Welcome Admin</h1></center>
        <br>
        <div class="col-md-4 col-md-offset-4" style="border:2px dotted #233140">
            <form id="login" method="post" action="<?php echo SITE_ROOT . 'admin' ?>">
            <div >
                <div>
                    <div class="form-group">
                        <br>
                        <label>Username</label>
                        <input id="username" type="text" class="form-control" name="username" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control" name="password" required/>
                    </div>
                </div>
                <div class="box-footer">
                    <input class="btn pull-right" type="submit" value="Log In" id="LogIn" />
                    <br><br>
                </div>
            </div>
        </form>
        </div>
    </div>

    <!-- Footer -->
    <br>
    <div class="admin-footer">
        <?php echo $footer; ?>
    </div>
</body>
<script type="text/javascript" src="<?php echo ASSETS_URL . 'js/jquery.min.js' ?>"></script>
<script >
$(document).ready(function(){

    $("#LogIn").click(function(){

        if( ($('.username').val() != null) && ($('.password').val() != null) )
        {
            $(this).addClass("btn-success");
            $(this).val("Logging you in ...");   
        }
        
    });
});
    
</script>
</html>
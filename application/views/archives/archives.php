<!DOCTYPE html>
<html>
<head>
	<title>Archives Page</title>

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
	<!-- Navigation -->
	<?php echo $nav ?>

	<div class="tabbable boxed parentTabs" style="margin-top: 95px;">
	    <ul class="nav nav-pills">
	        <li role="presentation" class="active col-md-2" style="text-align: center;"><a href="#set1">Members</a>
	        </li>
	        <li role="presentation" class="col-md-2" style="text-align: center;"><a href="#set2">Magazines</a>
	        </li>
	        <li role="presentation" class="col-md-2" style="text-align: center;"><a href="#set3">Reports</a>
	        </li>
	    </ul>
	    <div class="tab-content">
	        <div class="tab-pane fade active in" id="set1">
	            <div class="tabbable">
	                <ul class="nav nav-tabs">
	                    <li class="active"><a href="#sub11">2016</a>
	                    </li>
	                    <li><a href="#sub12">2015</a>
	                    </li>
	                    <li><a href="#sub12">2014</a>
	                    </li>
	                    
	                </ul>
	                <div class="tab-content" style="margin-left: 10px;">
	                    <div class="tab-pane fade active in" id="sub11">
	                        <p>Tab 1.1</p>
	                    </div>
	                    <div class="tab-pane fade" id="sub12">
	                        <p>Tab 1.2</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="tab-pane fade" id="set2">
	            <div class="tabbable">
	                <ul class="nav nav-tabs">
	                    <li class="active"><a href="#sub21">2016</a>
	                    </li>
	                    <li><a href="#sub22">2015</a>
	                    </li>
	                    <li><a href="#sub22">2014</a>
	                    </li>
	                </ul>
	                <div class="tab-content">
	                    <div class="tab-pane fade active in" id="sub21">
	                        <p>Tab 2.1</p>
	                    </div>
	                    <div class="tab-pane fade" id="sub22">
	                        <p>Tab 2.2</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="tab-pane fade" id="set3">
	            <div class="tabbable">
	                <ul class="nav nav-tabs">
	                    <li class="active"><a href="#sub31">2016</a>
	                    </li>
	                    <li><a href="#sub32">2015</a>
	                    </li>
	                    <li><a href="#sub32">2014</a>
	                    </li>
	                </ul>
	                <div class="tab-content">
	                    <div class="tab-pane fade active in" id="sub31">
	                        <p>Tab 3.1</p>
	                    </div>
	                    <div class="tab-pane fade" id="sub32">
	                        <p>Tab 3.2</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<?php echo $footer ?>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
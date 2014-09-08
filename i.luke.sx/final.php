<?php
	// Detect if the user exists
	if(isset($_GET['file'])){
		$user = $_GET['file'];
	}else{
		// This alert is at the end of the document to see if idiots are real.
		$user = "NO IMAGE LOADED";
	} 
?>
<style>
img.center {
	display: block !important;
	margin-left: auto !important;
	margin-right: auto !important;
	-webkit-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.15);
	box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.15);
	border-radius: 5px;
}
.top > div > div > div > h1 {
	border: 2px solid rgba(189, 165, 165, 0) !important;
	border-radius: 4px;
	padding-top: 0px !important;
	padding-bottom: 0px !important;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	text-transform: uppercase;
	font-size: 30px;
	letter-spacing: 3px;
	margin-top: -15px !important;
	margin-bottom: 0px !important;
}
.footer {
	text-align: center;
	color: #666;
	margin-top: 20px;
}

.footer > a:hover {
	text-align: center;
	color: #666;
	margin-top: 20px;
	text-decoration: none;
	font-weight: bolder;
	cursor: default;
}
.footer > a {
	text-align: center;
	color: #666;
	margin-top: 20px;
	padding: 10px;
}
</style>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Luke - Image Share</title>
		<link rel="icon" href="http://luke.sx/assets/favicon.ico">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://luke.sx/assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://luke.sx/assets/css/component.css" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$(document).bind("contextmenu",function(e) {
				return false;
			});
			$("img").mousedown(function(){
				return false;
			});
		}); 
		</script>
	</head>
	<body id="body">
		<div class="page-wrap">
			<div class="jumbotron top">
				<div class="container">
					<div class="row"> 
						<div class="col-md-6 col-md-offset-3">	
							<h1>Image - <?php echo $user; ?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".cl-effect-5">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand navbar-toggle" data-toggle="collapse" href="#">></a>
					</div>
				</div>
				<section class="color-grey">
					<div class="container">
						<nav class="navbar-collapse collapse cl-effect-5">
							<a href="http://luke.sx/#p1"><span data-hover="Home">Home</span></a>
							<a href="http://luke.sx/#p2"><span data-hover="Work">Work</span></a>
							<a href="http://luke.sx/#p3"><span data-hover="Play">Play</span></a>
							<a href="http://luke.sx/#p4"><span data-hover="Info">Info</span></a>
						</nav>
					</div>
				</section>
			</div>
			<div id="rounded">
				<div class="col-md-12" style="text-align: center">
					<img class="center" src="http://root-image.luke.sx/<?php echo $user ?>">
				</div>
			</div> <!-- /rounded -->
			<div class="container">
				<div class="row"> 
					<div class="footer">	
						<a href="http://root-image.luke.sx/<?php echo $user ?>" target="_blank">Direct Image</a> - 	
						<a href="mailto:me@luke.sx">Contact Me</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
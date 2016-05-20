<!DOCTYPE html>
<html>
<meta lang="en">
<head>

	<meta charset="utf-8">
	<!-- IE Compatability -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>
	<?php 
	if(isset($_GET['route']))
	{
	echo($_GET['route'])." | shoeboX";
	}else{
			echo "shoeboX";
	}
	 ?></title>
	<link rel="shortcut icon" type="image/ico" href="assets/imgs/logoooo.png" />
	<meta name="Keywords" content="men footwear,">
	<meta name="Description" content="Courses in HTML, CSS, JavaScript, SQL, PHP, and XML."> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/rtl.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coda" />


	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluidd" >
	

		<!-- Header Navbar -->
	 	<div class="row">
	 			<!-- Nav Bar  -->
	 			<?php require_once dirname(__FILE__)."/header.php" ; ?>
	 	</div>
	 	<!-- Home -->
	 	<div class="row">
	 			<?php 
	 				$route="/home.php" ;
	 				if(isset($_GET['route']))
	 				{
	 					$route=$_GET['route'].".php";
	 				}
	 				require_once($_SERVER['DOCUMENT_ROOT']."/shoeboxxxx/".$route);
	 			?>
	 		</div>
	 
		<!-- foooter -->
	 	<div class="row">
	 			<?php require_once dirname(__FILE__)."/footer.php" ; ?>
	 		</div>

	 	<!--  End of Container -->
</div>
	




<script type="text/javascript" src="assets/js/jquery-2.2.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
</body>
</html>
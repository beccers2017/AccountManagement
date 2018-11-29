<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Admin"; ?></title>
	
	<!--Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	
	<!--JQuery Library-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!--Popper JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	
	<!--Latest compiled JavaScript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<!--Admin custom CSS-->
	<link href="<?php echo $home_url . "libs/css/admin.css" ?>" rel="stylesheet" />
</head>
<body>
	<?php
	//include top navigation bar
	include_once: "navigation.php";
	?>
	
	<!--Container-->
	<div class="container">
		<!--display page title-->
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo isset($page_title) ? $page_title : "The Stockpile"; ?></h1>
			</div>
		</div>
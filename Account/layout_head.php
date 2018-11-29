<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo isset($page_tile)?strip_tags($page_tile):"The Stockpile";?></title>
	<link rel="shortcut icon" type="image/PNG" href="TheStockpile/StockpileDesign/chairlogo2.PNG" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/StockpileDesign/NavBar/navbar.css">
    <script src="/StockpileDesign/NavBar/loadDefault.js"></script>

	<!--Bootstrap CSS
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	-->

	<link href="<?php echo $home_url."libs/css/customer.css"?>" rel="stylesheet" />
</head>
<body>
<?php include_once 'StockpileDesign/Account/navigation.php';?>
<div class="container">
<?php
//if given page title is 'Login', do not display the title
if ($page_title != "Login") {
	?>
		<div class='col-md-12'>
			<div class="page-header">
				<h1><?php echo isset($page_title)?$page_title:"The Stockpile";?></h1>
			</div>
		</div>
	<?php
}
?>
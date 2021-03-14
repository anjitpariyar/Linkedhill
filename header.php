
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="msapplication-TileImage" content="./favicon/logo02.ico">
	
	<title>Linkedhill - all about Property</title>

	<!-- materailizeicon -->
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">

	<!-- fancybox -->
	<link rel="stylesheet" href="./css/fancybox/fancybox.min.css">


	
	<!-- facebook -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="bkj44UEv"></script>
	
	<!-- slick -->
	<link rel="stylesheet" href="./css/slick/slick-theme.css">
	<link rel="stylesheet" href="./css/slick/slick.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="./css/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./css/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./node_modules/multiselect-master/styles/multiselect.css">
	
	<!-- style -->
	<!-- <link rel="stylesheet" href="./css/style.css"> -->
	<?php 
	if(  $currentpage== 'home'){
		echo '<link rel="stylesheet" href="./css/style.css">'; 
	}
	else{
		echo '<link rel="stylesheet" href="./css/otherstyle.css">';
	}

	?>

</head>
<body>
	

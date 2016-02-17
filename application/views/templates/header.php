<!DOCTYPE HTML>
<html>
<head>
	<title>Enter title here</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="Content-Language" content="en">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/main.css" rel="stylesheet">
	<script src="/assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/js/main.js" type="text/javascript"></script>
</head>
<body>
	<div class="content container-fluid">
		<div id="desktop-header" class="center">
			<div class="title">
				<img class="logo" alt="Your logo" src="http://placehold.it/50x50">
				Videos by Jim
			</div>
		</div>
		
		<div class="row" id="mobile-header">
			<a href="#main-navbar" id="mobile-menu-icon"><i class="fa fa-bars fa-2x"></i></a>
			<div class="title center">
				<span>Videos by Jim</span>
			</div>
		</div>

		<nav id="main-navbar">
			<ul>
				<li><?php echo anchor('/home', 'Home');?></li>
				<li><?php echo anchor('/videos', 'Videos');?></li>
				<li><?php echo anchor('/packages', 'Packages');?></li>
				<li><?php echo anchor('/about', 'About');?></li>
				<li><?php echo anchor('/contact', 'Contact');?></li>
			</ul>
		</nav>

		<div id="content-cover"></div>

		<div id="content">
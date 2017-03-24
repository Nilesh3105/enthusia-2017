<?php
ob_start();
session_start();
require_once "includes/config.php";
require_once "includes/database.php";
require_once "includes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Nilesh Hirani">
	<title>Enthusia - <?php echo ucwords(pathinfo($_SERVER["SCRIPT_FILENAME"], PATHINFO_FILENAME)); ?></title>

	<!-- Material Design fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- Navbar -->
	<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>
	<link rel='stylesheet' property='stylesheet' id='miami_fonts-css' href='https://fonts.googleapis.com/css?family=Ubuntu%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDancing+Script%3A400%2C700%26subset%3Dlatin%2Clatin-ext&amp;ver=1489780710' type='text/css' media='all'/>
	<link rel='stylesheet' property='stylesheet' id='miami_base-style-css' href='wp-content/themes/miami/assets/css/style2153.css?ver=1489780710' type='text/css' media='all'/>
	<link rel='stylesheet' property='stylesheet' id='miami_dynamic-css-css' href='wp-admin/admin-ajaxc94f.css?action=dynamic_css&amp;ver=1489780710' type='text/css' media='all'/>
	<!-- <script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script> -->
	
	<link rel="icon" href="wp-content/uploads/2016/12/16x16.ico" sizes="32x32"/>

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Bootstrap Latest compiled and minified CSS and JavaScript -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	

	<!-- Bootstrap Material Design -->
	<link href="css/bootstrap-material-design.min.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
	<link href="css/jquery.dropdown.css" rel="stylesheet">

	<script src="js/material.min.js"></script>
	<script src="js/ripples.min.js"></script>
	<script src="js/jquery.dropdown.js"></script>

	<style type="text/css">
		.panel.panel-primary > .panel-heading {
			background-color: #D85B1F;
		}
		body {
			margin-top: 95px;
			background-color: #341C3D;
		}
		.btn.btn-success:not(.btn-raised){
			color:#D85B1F;
			border: none;
		}
		.btn.btn-danger{
			border: none;
		}
	</style>

	<script type='text/javascript' src='wp-content/themes/miami/assets/js/imagelightbox.min2153.js?ver=1489780710'></script>
	<script type='text/javascript' src='wp-content/themes/miami/assets/js/global2153.js?ver=1489780710'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$.material.init();
			$("select").dropdown();
		});
	</script>
</head>
<body>
	<header class="header clearfix">
		<div class="centered-menu-wrap">
			<div class="logo-block mobile">
				<a class="logo" href="index.php">
					<img class="f-logo" src="wp-content/uploads/2016/11/logo.png" alt="Miami">
				</a>
			</div>
			<nav class="main-nav">
				<ul id="menu-top-left-menu" class="anchor-navigation">
					<li id="menu-item-485" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children active page-dropdown nav-item menu-item-485">
						<a href="index.php#home">Home</a>
					</li>
					<li id="menu-item-856" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-856"><a href="index.php#events" class="anchor-scroll">Events</a></li>
					<li id="menu-item-855" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-855"><a href="index.php#sponsers" class="anchor-scroll">Sponsers</a></li>
				</ul>
				<div class="logo-block">
					<a class="logo" href="index.php">
						<img class="f-logo" src="wp-content/uploads/2016/11/logo.png" alt="Miami">
					</a>
				</div>
				<ul id="menu-top-right-menu" class="anchor-navigation">
					<li id="menu-item-857" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-857"><a href="index.php#gallery" class="anchor-scroll">Gallery</a></li>
					<li id="menu-item-846" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-846"><a href="index.php#Registration" class="anchor-scroll">Registration</a></li>
					<li id="menu-item-498" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-498">
						<?php if(!isset($_SESSION['logged_in'])) { ?>
						<a href="login.php">Login</a>
						<?php } else { ?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi! <?php echo $_SESSION['name']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
						<?php } ?>
					</li>
				</ul>
			</nav>
		</div>
		<button class="cmn-toggle-switch"><span></span></button>
	</header>
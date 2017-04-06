<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="UTF-8">
		<meta name="format-detection" content="telephone=no"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
		<title>Enthusia 2k17</title>
		<link rel='dns-prefetch' href='http://maps.googleapis.com/'/>
		<link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
		<link rel='dns-prefetch' href='http://s.w.org/'/>
		<link rel="alternate" type="application/rss+xml" title="Miami &raquo; Feed" href="feed/index.php"/>
		<link rel="alternate" type="application/rss+xml" title="Miami &raquo; Comments Feed" href="comments/feed/index.php"/>
		<!-- <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/foxthemes.com\/web\/wp\/miami\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.3"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style> -->
		<link rel='stylesheet' property='stylesheet' id='bootstrap-css' href='wp-content/themes/miami/assets/css/bootstrap.min2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='font-awesome-css' href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.mina752.css?ver=4.11.2.1' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='idangerous.swiper-css' href='wp-content/themes/miami/assets/css/idangerous.swiper2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_change-color-css' href='wp-content/themes/miami/assets/css/change_color2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_fonts-css' href='http://fonts.googleapis.com/css?family=Ubuntu%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDancing+Script%3A400%2C700%26subset%3Dlatin%2Clatin-ext&amp;ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_fonts_icons-css' href='wp-content/themes/miami/assets/css/miami_icons2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_unit-test-css' href='wp-content/themes/miami/assets/css/unit-testfe9d.css?ver=4.7.3' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='animate-css' href='wp-content/themes/miami/assets/css/animate2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_base-style-css' href='wp-content/themes/miami/assets/css/style2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami_dynamic-css-css' href='wp-admin/admin-ajaxc94f.css?action=dynamic_css&amp;ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='miami-style-css' href='wp-content/themes/miami/stylefe9d.css?ver=4.7.3' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles167b.css?ver=4.6' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='demo_colors-css' href='wp-content/plugins/filter-theme-for-onepage/demo2153.css?ver=1489780710' type='text/css' media='all'/>
		<link rel='stylesheet' property='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all'/>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
		<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/imagelightbox.min2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/jquery.knob2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/jquery.throttle2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyA6M45oe9V8IfJfUB6x4k0FKhmEf58nJAs&amp;ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/global2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/anchors.navigation2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/customizer2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/equalHeightsPlugin2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/parallax2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/themes/miami/assets/js/navigation2153.js?ver=1489780710'></script>
		<script type='text/javascript' src='wp-content/plugins/filter-theme-for-onepage/js/filter2153.js?ver=1489780710'></script>
		<script src="js/index.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style_timer.css">	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='https://api.w.org/' href='wp-json/index.php'/>
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
		<meta name="generator" content="WordPress 4.7.3"/>
		<meta name="generator" content="WooCommerce 2.6.11"/>
		<link rel="canonical" href="index.php"/>
		<link rel='shortlink' href='index.php'/>
		<link rel="stylesheet" type="text/css" href="css/style_circle.css">
		
		<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed312c.json?url=http%3A%2F%2Ffoxthemes.com%2Fweb%2Fwp%2Fmiami%2F"/>
		<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed52af?url=http%3A%2F%2Ffoxthemes.com%2Fweb%2Fwp%2Fmiami%2F&amp;format=xml"/>
		<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="http://foxthemes.com/web/wp/miami/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
		<![endif]--><!--[if IE  8]>
		<link rel="stylesheet" type="text/css" href="http://foxthemes.com/web/wp/miami/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
		<![endif]-->
		<link rel="icon" href="wp-content/uploads/2016/12/16x16.ico" sizes="32x32"/>
		<link rel="icon" href="wp-content/uploads/2016/12/16x16.ico" sizes="192x192"/>
		<link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2016/12/16x16.png"/>
		<meta name="msapplication-TileImage" content="wp-content/uploads/2016/12/16x16.png"/>
		<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1479890886073{background-image:url(wp-content/uploads/2016/10/bannerd58f.jpg?id=732)!important;background-position:center!important;background-repeat:no-repeat!important;background-size:cover!important;}</style>
		<noscript>
			<style type="text/css">.wpb_animate_when_almost_visible{opacity:1;}</style>
		</noscript>

		<style type="text/css">
			.header .centered-menu-wrap .main-nav > ul {
				flex: 3;
			}
			.header .centered-menu-wrap .main-nav > div.logo-block {
				flex: 1;
				justify-content: center;
			}
			#menu-top-right-menu{
				justify-content: flex-end;
			}
		</style>
	</head>
	<body class="home page-template-default page page-id-331 custom-background wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="cssload-wrap">
						<div class="cssload-cssload-spinner"></div>
					</div>
				</div>
			</div>
		</div>
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
						<li id="menu-item-855" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-855"><a href="index.php#sponsors" class="anchor-scroll">Sponsors</a></li>
						
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
		<div id="home-page-1" class="container add_animation">
			<div id="home" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1479890886073 vc_row-has-fill vc_row-no-padding">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="banner-slider-wrap  ">
								<div class="row" style="margin: 100px auto 0px;">
									<div class="col-md-2 col-md-offset-1" style="padding-top: 5%">
										<div class="plane main" >
											<div class="circle"></div>
											<div class="circle"></div>
											<div class="circle"></div>
											<div class="circle"></div>
											<div class="circle"></div>
											<div class="circle"></div>
										</div>
									</div>
									<div class="col-md-6">
										<p style="font-family: 'Open Sans'; line-height: 1.5; text-align: center; font-size: 2vw; font-size:calc(12px + 0.5vw);">Event Starts On 10 APRIL!</p>
										<div style="font-family:'BlowBrush'; font-size: 10vw;line-height: 1em; text-align: center; font-size:calc(30px + 8vw);">Enthusia</div>
										<div style="font-family:'BlowBrush'; font-size: 6vw;line-height: 1em; text-align: center; font-size:calc(12px + 4vw);">2K17</div>
										<p style="font-family: 'Open Sans'; line-height: 1.5; text-align: center;font-size: 1.5vw; font-size:calc(14px + 0.3vw);">
											<!-- Graced with some of the best sports facilities one could ask for, this annual festival is sure to set your heartbeat racing, and give you that adrenaline rush once again. Some of the most skilled and talented sportsmen will lock horns in front of hoards of fans spurring the players on to bring the best out of them. Enthusia provides ample opportunities to develop your creativity, leadership qualities, team building and managerial skills. Our vision is to nurture sports talent and make realize their full potential.  -->
											One spirit,One team,One win... <br>
											Zest Passion Zeal<br>
											With temperatures running high we present one of those must see displays of grit and sportsmanship. So let's be a part of this extravaganza from 10 April to 12 April.<br>
											#Never Back Down #The Heat Is On
										</p>
									</div>	
									<div class="col-md-2" style="padding-top: 5%">

										<div class="plane main" >
											<div class="circle1"></div>
											<div class="circle1"></div>
											<div class="circle1"></div>
											<div class="circle1"></div>
											<div class="circle1"></div>
											<div class="circle1"></div>

										</div>
									</div>
									<div class="row">
										<div ng-app="timerApp" ng-controller="testCtrl" class="cen" >
											<div blt-countdown-timer type="dhm" date="Sat, 10 April 2017 08:00:00 GMT+5:30"></div> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div>
		<!-- <div id="about" class="container add_animation">
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480503193857 vc_row-has-fill padding-lg-100b padding-sm-50b padding-xs-30b">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-70t margin-sm-30t margin-xs-10t">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">About Our Club</h2>
								<div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-6 vc_col-lg-6 vc_col-md-offset-6 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12 ">
					<div class="vc_column-inner vc_custom_1476800654288">
						<div class="wpb_wrapper">
							<div class="swiper-container animatedBlock miami_about_slider " data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-add-slides="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
								<div class="swiper-wrapper">
									<div class="swiper-slide  active" data-val="0">
										<div class="about-item">
											<h5 class="about-title">We are the best in this field</h5>
											<div class="about-text">
												<p>Cetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit quis nostrud exercitation ullamco laboris nisi ut aliquip exea. Qute irure dolor in reprehenderit quis nostrud\r\rexercitation ullamco laboris nisi ut aliquip ex ea commod ouis nostrud exerceo la boris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide " data-val="1">
										<div class="about-item">
											<h5 class="about-title">We are the best in this field</h5>
											<div class="about-text">
												<p>Cetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit quis nostrud exercitation ullamco laboris nisi ut aliquip exea. Qute irure dolor in reprehenderit quis nostrud\r\rexercitation ullamco laboris nisi ut aliquip ex ea commod ouis nostrud exerceo la boris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide " data-val="2">
										<div class="about-item">
											<h5 class="about-title">We are the best in this field</h5>
											<div class="about-text">
												<p>Cetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit quis nostrud exercitation ullamco laboris nisi ut aliquip exea. Qute irure dolor in reprehenderit quis nostrud\r\rexercitation ullamco laboris nisi ut aliquip ex ea commod ouis nostrud exerceo la boris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="pagination custom"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div> -->
		<div id="events" class="container add_animation">
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480421744851 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock  vc_custom_1483025838096">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Events</h2>
								<div class="block-text">
									<p>Scheduled Events for three day long Enthusia-2k17.</p>
								</div>
							</div>
							<div class="events-wrapper ">
								<div class="tabs">
									<div class="tabs-header">
										<ul>
											<li class="animatedBlock  active">
												<a href="#">Team Events</a>
											</li>
											<li class="animatedBlock ">
												<a href="#">Athletics</a>
											</li>
											<li class="animatedBlock ">
												<a href="#">Indoors</a>
											</li>
											<li class="animatedBlock ">
												<a href="#">Others</a>
											</li>
										</ul>
									</div>
									<div class="tabs-content animatedBlock">
										<div class="tabs-item active">
											<div class="tabs2">
												<div class="tabs-header2">
													<ul>
														<li class="animatedBlock  active">
															<a href="#">
															<img class="s-img-switch" src="images/events/cricket.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/basketball.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/volleyball.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock">
															<a href="#">
															<img class="s-img-switch" src="images/events/football.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock">
															<a href="#">
															<img class="s-img-switch" src="images/events/kabaddi.jpg" alt=""> </a>
														</li>
													</ul>
												</div>
												<div class="tabs-content2">
													<div class="tabs-item2 active">
														<div class="table">
															<div class="colum animatedBlock content" id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		Enthusia 
																	</div>
																	<div class="title">CRICKET</div>
																</div>
																<div class="text" >
																	Boys Criket(maximum candidates allowed are 15 per team) • Registration fees(tennis ball) for boys is ₹ 1500/- • Registration fees(leather ball) for boys is ₹ 5500/- • Girls Cricket(maximum candidates allowed are 6 per team) • Registration is FREE<br><h4>Coordinators(Tennis ball cricket):</h4>
																	<span>Mukesh Jakhar 9468685432<br>Bharat Bhadrejha 9660270088
																	</span>
																	<br><h4>Coordinators(Leather ball cricket):</h4>
																	<span>Rajesh Nain 9829064924<br>Siom Singh 7732898418</span>
																	<br><h4>Coordinators(Women's Cricket):</h4>
																	<span>Renu 9875140171</span>
																</div>
																<div class="time"> 
																	<a href="docs/Cricket.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	35,000 </span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/cricket.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		8<sup>th</sup> April 
																	</div>
																	<div class="title">BASKETBALL</div>
																</div>
																<div class="text" >
																	Boys Basketball(maximum candidates allowed are 12 per team) • Girls Basketball(maximum candidates allowed are 12 per team) • Registration fees is ₹ 1000/-<br><h4>Coordinators:</h4>
																	<span>Rajan Panwar 9166788993<br>Dharmendra Bijaniya 9509545597<br>
																	Anjali Kanwatya 9414339260
																	</span>
																</div>
																<div class="time"> 
																	<a href="docs/Basketball%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	10000</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/basketball.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		8<sup>th</sup> April 
																	</div>
																	<div class="title">VOLLEYBALL</div>
																</div>
																<div class="text">
																	Boys Volleyball(maximum candidates allowed are 9 per team) • Registration fees is ₹ 1000/-<br><h4>Coordinators:</h4>
																	<span>Yogesh Rolaniya 9462019586<br>Mahadan Singh Bhati 7062756745
																	<br>Vicky Mahla 9530129996
																	</span>
																</div>
																<div class="time"> 
																	<a href="docs/Volleyball%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	10000 </span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/volleyball.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		8<sup>th</sup> April 
																	</div>
																	<div class="title">Football</div>
																</div>
																<div class="text" >
																	Boys Football(maximum candidates allowed are 15 per team) • Registration fees is ₹ 2000/-<br><h4>Coordinators:</h4>
																	<span>Sidharth Kumar 8385907498<br>Prakash Kumawat 7073165230
																	<br>Harshit Mehta 8764362116
																	</span>
																</div>
																<div class="time"> 
																	<a href="docs/Football%20Rules.pdf" target="_blank"><input type="submit" value="Rules"/></a>
																</div>
																<div class="price">
																<a>
																	<span class="price-item">
																		<sup>₹</sup>6000
																	</span>
																</a>	
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/football.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		8<sup>th</sup> April 
																	</div>
																	<div class="title">Kabaddi</div>
																</div>
																<div class="text" >
																	Boys Kabaddi(maximum candidates allowed are 10 per team) • Registration fees is ₹ 1000/-<br><h4>Coordinators:</h4>
																	<span>Ayush Parmar 7597930972<br>Abhishek Bhatt 7222807738</span>
																</div>
																<div class="time"> 
																	<a href="docs/Kabaddi%20Rules.pdf" target="_blank"><input type="submit" value="Rules"/></a>
																</div>
																<div class="price">
																<a>
																	<span class="price-item">
																		<sup>₹</sup>3500
																	</span>
																</a>	
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/kabaddi.jpg" alt=""> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tabs-item">
											<div class="tabs2">
												<div class="tabs-header2">
													<ul>
														<li class="animatedBlock  active">
															<a href="#">
															<img class="s-img-switch" src="images/events/athletics.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/shot-put.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/high-jump.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/long-jump.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock">
															<a href="#">
															<img class="s-img-switch" src="images/events/weight-lifting.jpg" alt=""> </a>
														</li>
													</ul>
												</div>
												<div class="tabs-content2">
													<div class="tabs-item2 active">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		9<sup>th</sup> April 
																	</div>
																	<div class="title">SPRINT</div>
																</div>
																<div class="text">
																	Sprint 100 meters • Sprint 200 meters • Sprint 400 meters • Sprint 4x100 meters • Registration fees for each is ₹ 50/-<br><h4>Coordinators:</h4>
																	<span>Amrit Buriya 7742227156<br>Mayank Balot 8290578978
																	<br>Dashrath Choudhary 9001135902
																	</span>
																</div>
																<div class="time">
																	<a href="docs/Athletics%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/athletics.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		9<sup>th</sup> April 
																	</div>
																	<div class="title">SHOT PUT</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 50/-<br><h4>Coordinators:</h4>
																	<span>Amrit Buriya 7742227156<br>Mayank Balot 8290578978
																	<br>Dashrath Choudhary 9001135902
																	</span>
																</div>
																<div class="time">
																	<a href="docs/Athletics%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a> 
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/shot-put.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		9<sup>th</sup> April 
																	</div>
																	<div class="title">HIGH JUMP</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 50/-<br><h4>Coordinators:</h4>
																	<span>Amrit Buriya 7742227156<br>Mayank Balot 8290578978
																	<br>Dashrath Choudhary 9001135902
																	</span>
																</div>
																<div class="time">
																	<a href="docs/Athletics%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/high-jump.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		9<sup>th</sup> April 
																	</div>
																	<div class="title">LONG JUMP</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 50/-<br><h4>Coordinators:</h4>
																	<span>Amrit Buriya 7742227156<br>Mayank Balot 8290578978
																	<br>Dashrath Choudhary 9001135902
																	</span> 
																</div>
																<div class="time">
																	<a href="docs/Athletics%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/long-jump.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		9<sup>th</sup> April 
																	</div>
																	<div class="title">WEIGHT LIFTING</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 50/-<br><h4>Coordinators:</h4>
																	<span>Amrit Buriya 7742227156<br>Mayank Balot 8290578978
																	<br>Dashrath Choudhary 9001135902
																	</span>
																</div>
																<div class="time">
																	<a href="#" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/weight-lifting.jpg" alt=""> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tabs-item">
											<div class="tabs2">
												<div class="tabs-header2">
													<ul>
														<li class="animatedBlock  active">
															<a href="#">
															<img class="s-img-switch" src="images/events/badminton.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/futsal.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/table-tennis.jpeg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/chess.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock">
															<a href="#">
															<img class="s-img-switch" src="images/events/carrom.jpg" alt=""> </a>
														</li>
													</ul>
												</div>
												<div class="tabs-content2">
													<div class="tabs-item2 active">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">BADMINTION</div>
																</div>
																<div class="text">
																	Badminton singles (G/B) • Registration fees for singles is ₹ 100/- • Badminton doubles (G/B) • Badminton mixed doubles • Registration fees for doubles is ₹ 150/-<br><h4>Coordinators:</h4>
																	<span>Jayant Chaubey 8741959652<br>Rahul Kanwat 7733836634
																	<br>Deepansh Meena 9782249770
																	</span> 
																</div>
																<div class="time">
																	<a href="docs/badminton%20rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	4100</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/badminton.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">FUTSAL</div>
																</div>
																<div class="text">
																	Maximum candidates allowed are 6 per team • Registration fees and price money will be decided on the spot
																</div>
																<div class="time">
																	<a href="docs/Futsal%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/futsal.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">TABLE TENNIS</div>
																</div>
																<div class="text">
																	Table Tennis singles (G/B) • Registration fees for singles is ₹ 100/- • Table Tennis doubles (G/B) • Table Tennis mixed doubles • Registration fees for doubles is ₹ 150/-<br><h4>Coordinators:</h4>
																	<span>Mayank Lahari 9468889193<br>Ashwini Kaswa 8290865548
																	</span>  
																</div>
																<div class="time">
																	<a href="docs/Table%20Tennis%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	1500</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/table-tennis.jpeg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">CHESS</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 100/-<br><h4>Coordinators:</h4>
																	<span>Sandip Joshi 7023304973<br>Ajay Saran 9269732317
																	</span>  
																</div>
																<div class="time">
																	<a href="docs/Chess%20Rules.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	500</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/chess.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">CARROM</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 100/-<br><h4>Coordinators:</h4>
																	<span>Dhiraj Tholiya 9783697013
																	</span>  
																</div>
																<div class="time">
																	<a href="#" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	500 </span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/carrom.jpg" alt=""> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tabs-item">
											<div class="tabs2">
												<div class="tabs-header2">
													<ul>
														<li class="animatedBlock  active">
															<a href="#">
															<img class="s-img-switch" src="images/events/kho-kho.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/Tenis.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/ipl-auction.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock ">
															<a href="#">
															<img class="s-img-switch" src="images/events/swimming.jpg" alt=""> </a>
														</li>
														<li class="animatedBlock">
															<a href="#">
															<img class="s-img-switch" src="images/events/roadies.png" alt=""> </a>
														</li>
													</ul>
												</div>
												<div class="tabs-content2">
													<div class="tabs-item2 active">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">KHO-KHO</div>
																</div>
																<div class="text">
																	Maximum candidates allowed are 15 per team • Registration fees is ₹ 600/-<br><h4>Coordinators:</h4>
																	<span>Rakesh Peeloda 7026770977<br>Anuradha Joshi 9413082828
																	</span>  
																</div>
																<div class="time">
																	<a href="docs/KhoKho.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/kho-kho.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">LAWN TENNIS</div>
																</div>
																<div class="text">
																	Lawn Tennis singles (G/B) • Registration fees for singles is ₹ 100/- • Lawn Tennis doubles (G/B) • Table Tennis mixed doubles • Registration fees for doubles is ₹ 150/-
																</div>
																<div class="time">
																	<a href="docs/LAWN%20TENNIS .pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/Tenis.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">IPL AUCTION</div>
																</div>
																<div class="text">
																	Maximum candidates allowed are 2 per team • Registration fees is ₹ 300/-<br><h4>Coordinators:</h4>
																	<span>Abhinav Janu 9929441772
																	</span>  
																</div>
																<div class="time">
																	<a href="#" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	<sup>₹</sup>
																	15,000 </span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/ipl-auction.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">SWIMMING</div>
																</div>
																<div class="text">
																	Registration fees is ₹ 100/-<br><h4>Coordinators:</h4>
																	<span>Shubham Singh Bhati 7425978898<br>Pushpa Vishnoi 8824229259
																	</span>  
																</div>
																<div class="time">
																	<a href="docs/Swimming.pdf" target="_blank"><input type="submit" value="Rules" /></a>
																</div>
																<div class="price">
																	<span class="price-item">
																	MEDALS</span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/swimming.jpg" alt=""> 
															</div>
														</div>
													</div>
													<div class="tabs-item2">
														<div class="table">
															<div class="colum animatedBlock content " id="event_background">
																<div class="wrap-title">
																	<div class="date">
																		10<sup>th</sup> April 
																	</div>
																	<div class="title">ROADIES</div>
																</div>
																<div class="text">
																	This is a team event consisting of 5 members with at least two female and two male candidates • Registration fees is ₹ 500/- per team<br><h4>Coordinators:</h4>
																	<span>Sumit Deora 8952944686<br>Lovish Aggarwal 9799433141
																	</span> 
																</div>
																<!-- <div class="time">
																	<a href="docs/#" target="_blank"><input type="submit" value="Rules" /></a>
																</div> -->
																<div class="price">
																	<span class="price-item"><abbr title="TO BE DECLARED SOON">
																	TBD</abbr></span>
																	</a>
																	<span>PRIZE POOL</span>
																</div>
															</div>
															<div class="colum animatedBlock">
																<img class="s-img-switch" src="images/events/roadies.png" alt=""> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div>
		<div id="codeofconduct" class="container add_animation">
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480422279776 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-0t margin-sm-0t margin-xs-0t">
					<div class="vc_column-inner vc_custom_1476875217258" style="padding-top: 0px;">
						<div class="wpb_wrapper margin-sm-15l">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Code of Conduct</h2>
								<div class="block-text" style="text-align: left; font-size: 16px;">
									<ul>
										<li style="list-style-type: disc;">All players should come in proper kits (shorts, t-shirts).</li>
										<li style="list-style-type: disc;">Players should have clean Non-marking shoes and should be used only on the court.</li>
										<li style="list-style-type: disc;">Practice slots will be provided, no team will be allowed to practice on court other than 	their slot.</li>
										<li style="list-style-type: disc;">Any kind of interference/misconduct during the conduction of the game will lead to 	disqualification of the team.</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div>
		<div id="accommodation" class="container add_animation">
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480422279776 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-65t margin-sm-0t margin-xs-0t">
					<div class="vc_column-inner vc_custom_1476875217258" style="padding-top: 0px;">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Accommodation</h2>
								<br>
								<img src="images/accomodation.jpg">
								<div class="block-text" style="text-align: left; font-size: 16px;">
									<p style="text-align: center;">
										Accommodation will be provided at an expense of ₹ 600/- per head which will include lunch
										and dinner and boarding facilities.  
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div>
		<div id="sponsors" class="container add_animation">
			<div class="vc_row wpb_row vc_row-fluid margin-lg-80t padding-lg-50t padding-sm-10t padding-xs-0t" style="padding-top: 0px;">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-30b">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Our Sponsors</h2>
								<!-- <div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
				<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="services-wrap animatedBlock">
								<div class="service-block service-entry">
									<div class="block-icon"><i class="miami-icon icon-cupcake"></i></div>
									<h4 class="service-title">COMING SOON</h4>
									<div class="service-text"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="services-wrap animatedBlock">
								<div class="service-block service-entry">
									<div class="block-icon"><i class="miami-icon icon-mask"></i></div>
									<h4 class="service-title">COMING SOON</h4>
									<div class="service-text"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="services-wrap animatedBlock">
								<div class="service-block service-entry">
									<div class="block-icon"><i class="miami-icon icon-ice-cream"></i></div>
									<h4 class="service-title">COMING SOON</h4>
									<div class="service-text"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="services-wrap animatedBlock">
												<div class="service-block service-entry">
													<div class="block-icon"><i class="miami-icon icon-cupcake"></i></div>
													<h4 class="service-title">COMING SOON</h4>
													<div class="service-text"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="services-wrap animatedBlock">
												<div class="service-block service-entry">
													<div class="block-icon"><i class="miami-icon icon-mask"></i></div>
													<h4 class="service-title">COMING SOON</h4>
													<div class="service-text"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 ">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="services-wrap animatedBlock">
												<div class="service-block service-entry">
													<div class="block-icon"><i class="miami-icon icon-ice-cream"></i></div>
													<h4 class="service-title">COMING SOON</h4>
													<div class="service-text"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
			</div>
		</div>
		<div id="gallery" class="container add_animation">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-80t margin-lg-20b margin-sm-35t margin-xs-5t">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Gallery</h2>
								<div class="block-text">
									<p>Some exciting captured moments of various events of last years Enthusia.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="isotope-container_gallery">
								<div class="grid-sizer col-xs-12 col-sm-3"></div>
								<div class="item col-xs-12 col-sm-6 col-md-6">
									<a class="gal-item animatedBlock big lightbox" href="wp-content/uploads/2016/10/party.jpg">
										<img class="s-img-switch" src="wp-content/uploads/2016/10/party.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;PRO NIGHT&quot;</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-6 col-md-3">
									<a class="gal-item animatedBlock big lightbox" href="images/gallery%20photos/volleyball.jpg">
										<img class="s-img-switch" src="images/gallery%20photos/volleyball.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;VOLLEYBALL&quot;</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-3 col-md-3">
									<a class="gal-item animatedBlock small lightbox" href="wp-content/uploads/2016/10/Party-nightclub.jpg">
										<img class="s-img-switch" src="wp-content/uploads/2016/10/Party-nightclub.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;KABADDI&quot;</div>											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-3 col-md-3">
									<a class="gal-item animatedBlock small lightbox" href="wp-content/uploads/2016/10/Fotolia_10189455_M1.jpg">
										<img class="s-img-switch" src="wp-content/uploads/2016/10/Fotolia_10189455_M1.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;BADMINTON&quot;</div>											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-3 col-md-3">
									<a class="gal-item animatedBlock small lightbox" href="images/gallery%20photos/prize-ceremony.jpg">
										<img class="s-img-switch" src="images/gallery%20photos/prize-ceremony.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;PRIZE CEREMONY&quot;</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-3 col-md-3">
									<a class="gal-item animatedBlock small lightbox" href="images/gallery%20photos/basketball.jpg">
										<img class="s-img-switch" src="images/gallery%20photos/basketball.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;BASKETBALL&quot;</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-6 col-md-6">
									<a class="gal-item animatedBlock big lightbox" href="images/gallery%20photos/roadies.jpg">
										<img class="s-img-switch" src="images/gallery%20photos/roadies.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;ROADIES&quot;</div>
											</div>
										</div>
									</a>
								</div>
								<div class="item col-xs-12 col-sm-6 col-md-6">
									<a class="gal-item animatedBlock small lightbox" href="wp-content/uploads/2016/07/stock-photo-169015697.jpg">
										<img class="s-img-switch" src="wp-content/uploads/2016/07/stock-photo-169015697.jpg" alt=""> 
										<div class="gal-desc">
											<div class="vertical-align">
												<div class="gal-title">&quot;FOOTBALL&quot;</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div id="team" class="container add_animation" style="margin-top: 80px;">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-sm-5t margin-xs-5t">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock  vc_custom_1476798862326">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">We Have a Wonderful Team</h2>
								<div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner vc_custom_1476796624666">
						<div class="wpb_wrapper">
							<ul class="team-wrap  ">
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/Photo_1.png" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">LUCK TRIDER</div>
											<div class="team-pos">Manager</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/Photo.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">NATALI GIBSON</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/4.png" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">JOLY RUFFER</div>
											<div class="team-pos">Director</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/5.png" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">BOB GRANT</div>
											<div class="team-pos">DJ</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/6.png" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">OLIVIA TOMPSON</div>
											<div class="team-pos">Event manager</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/Photo_1.png" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">LUCK TRIDER</div>
											<div class="team-pos">Manager</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
								<li class="team-item animatedBlock ">
									<div class="team-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/2.jpg" alt=""></div>
									<div class="descr">
										<div class="vertical-align">
											<div class="team-title">MAT LABLANK</div>
											<div class="team-pos">Dancing artist</div>
											<div class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</div>
											<div class="team-social">
												<a href="https://www.facebook.com/" title="" class="fa fa-facebook"></a>
												<a href="https://twitter.com/" title="" class="fa fa-twitter"></a>
												<a href="https://plus.google.com/" title="" class="fa fa-google-plus"></a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
		
		
		<div id="Registration" class="container add_animation">
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480422279776 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-40t margin-sm-0t margin-xs-0t">
					<div class="vc_column-inner vc_custom_1476875217258" style="padding-top: 0px;">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Registration</h2>
								<div class="block-text">
									<p> Online Registration is mandatory for all the participants. Last date of registration through e-mail or post is 5th of April, 2017. Please confirm your participation by this date. Kindly do so by e-mail, and subsequently mail the signed registration form.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
								<div class="screen-reader-response"></div>
									<div class="container-fluid no-padding reservation-form">
										<div class="row form-row">
											<div class="submit-wrapper col-xs-12 animatedBlock">
												<div class="submit-wrap"> <a href="signup.php"><input type="submit" value="Register" class="wpcf7-form-control wpcf7-submit a-btn"/> <i class="fa fa-angle-right" aria-hidden="true"></i> </a></div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div>
		<!-- <div id="testimonials" class="container add_animation">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-115t margin-lg-15b margin-sm-65t margin-sm-5b margin-xs-45t margin-xs-5b">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Testimonials</h2>
								<div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="swiper-container miami_testimonials " data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-add-slides="2" data-xs-slides="1" data-sm-slides="1" data-md-slides="2" data-lg-slides="2">
								<div class="swiper-wrapper margin-lg-15b">
									<div class="swiper-slide  active" data-val="0">
										<div class="testimoanial-item animatedBlock">
											<div class="content-wrap">
												<div class="content">
													<div class="testimoanial-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/stock-photo-156652931.jpg" alt=""></div>
													<h5 class="testimoanial-title">MIKE BRENDON</h5>
													<div class="testimoanial-text">
														<p>Rure dolor in reprehenderit in voluptate velit esse cillum doluptate velit esolupt vlum dolu  ptatel elit nderit in voluptate velit</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide " data-val="1">
										<div class="testimoanial-item animatedBlock">
											<div class="content-wrap">
												<div class="content">
													<div class="testimoanial-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/Layer-201.jpg" alt=""></div>
													<h5 class="testimoanial-title">AMANDA STUARD</h5>
													<div class="testimoanial-text">
														<p>Oute irure dolor in reprehenderit in voluptate velit esse cillum doluptate velit esolupt vel  reprehenderi</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide " data-val="2">
										<div class="testimoanial-item animatedBlock">
											<div class="content-wrap">
												<div class="content">
													<div class="testimoanial-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/stock-photo-122883921.jpg" alt=""></div>
													<h5 class="testimoanial-title">DEN PORTMAN</h5>
													<div class="testimoanial-text">
														<p>Voluptate velit esse cillum doluptate velit esolupt vlum dolu  ptatel elit nderit in voluptate velit. Rure dolor in reprehenderit in</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide " data-val="3">
										<div class="testimoanial-item animatedBlock">
											<div class="content-wrap">
												<div class="content">
													<div class="testimoanial-img"><img class="s-img-switch" src="wp-content/uploads/2016/10/stock-photo-156914651.jpg" alt=""></div>
													<h5 class="testimoanial-title">LILI STUARD</h5>
													<div class="testimoanial-text">
														<p>Reprehenderit in voluptate velit esse cillum doluptate velit esolupt vel  reprehenderi oute irure dolor in</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pagination custom center"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div id="news" class="container add_animation">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-95t margin-sm-50t margin-xs-35t">
					<div class="vc_column-inner vc_custom_1476876568754">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon">
									<i class="fa fa-code" style="font-size: 30px; color: #d85b1f"></i>
								</div>
								<h2 class="block-title">Developed By</h2>
								<!-- <div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1480422406158 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div>
								<div class="row wp-social-margin">
									<!-- <div class="news-entry animatedBlock col-xs-12 col-sm-6 col-md-4">
										<div class="news type-2">
											<div class="wp-b-news-entry-wrap img-wrap">
												<img class="s-img-switch" src="http://graph.facebook.com/546489015542683/picture" alt="">
											</div>
											<div class="news-desc">
												<h4><a class="news-title" href="https://www.facebook.com/lorem123/posts/546489015542683">Best parties ever</a></h4>
												<div class="news-date"><i class="fa fa-calendar"></i> 10:39 October 19, 2016</div>
											</div>
										</div>
									</div>
									<div class="news-entry animatedBlock col-xs-12 col-sm-6 col-md-4">
										<div class="news type-2">
											<div class="wp-b-news-entry-wrap img-wrap">
												<img class="s-img-switch" src="http://graph.facebook.com/546488955542689/picture" alt="">
											</div>
											<div class="news-desc">
												<h4><a class="news-title" href="https://www.facebook.com/lorem123/posts/546488955542689">Music is our passion</a></h4>
												<div class="news-date"><i class="fa fa-calendar"></i> 10:39 October 19, 2016</div>
											</div>
										</div>
									</div>
									<div class="news-entry animatedBlock col-xs-12 col-sm-6 col-md-4">
										<div class="news type-2">
											<div class="wp-b-news-entry-wrap img-wrap">
												<img class="s-img-switch" src="http://graph.facebook.com/546488872209364/picture" alt="">
											</div>
											<div class="news-desc">
												<h4><a class="news-title" href="https://www.facebook.com/lorem123/posts/546488872209364">Freedom Sundays</a></h4>
												<div class="news-date"><i class="fa fa-calendar"></i> 10:39 October 19, 2016</div>
											</div>
										</div>
									</div> -->
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="dev">
											Nilesh Hirani
											<a target="_blank" href="https://www.linkedin.com/in/nileshhirani">
												<i class="fa fa-linkedin"></i>
											</a>
											<a target="_blank" href="https://github.com/Nilesh3105/">
												<i class="fa fa-github"></i>
											</a>
											<a target="_blank" href="https://www.facebook.com/Nilesh3105">
												<i class="fa fa-facebook"></i>
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="dev">
											Manish Sharma
											<a target="_blank" href="https://www.linkedin.com/in/manishsharma1901">
												<i class="fa fa-linkedin"></i>
											</a>
											<a target="_blank" href="https://github.com/hackinitiator/">
												<i class="fa fa-github"></i>
											</a>
											<a target="_blank" href="https://www.facebook.com/dream.weaver19">
												<i class="fa fa-facebook"></i>
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="dev">
											Piyush Sharma
											<a target="_blank" href="https://www.linkedin.com/in/piyusharma95">
												<i class="fa fa-linkedin"></i>
											</a>
											<a target="_blank" href="https://github.com/piyusharma95/">
												<i class="fa fa-github"></i>
											</a>
											<a target="_blank" href="https://www.facebook.com/piyusharma95">
												<i class="fa fa-facebook"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width"></div>
		</div> 
	<!-- 	<div id="contact" class="container add_animation">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12  margin-lg-80t margin-lg-25b margin-sm-50t margin-sm-25b margin-xs-35t margin-xs-25b">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="block-header animatedBlock ">
								<div class="block-icon"><i class="miami-icon icon-martini"></i></div>
								<h2 class="block-title">Contact Us</h2>
								<div class="block-text">
									<p>Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12 ">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div role="form" class="wpcf7" id="wpcf7-f688-o2" lang="en-US" dir="ltr">
								<div class="screen-reader-response"></div>
								<form action="http://foxthemes.com/web/wp/miami/#wpcf7-f688-o2" method="post" class="wpcf7-form" novalidate="novalidate">
									<div style="display: none;">
										<input type="hidden" name="_wpcf7" value="688"/>
										<input type="hidden" name="_wpcf7_version" value="4.6"/>
										<input type="hidden" name="_wpcf7_locale" value="en_US"/>
										<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f688-o2"/>
										<input type="hidden" name="_wpnonce" value="128a002318"/>
									</div>
									<div class="container-fluid no-padding contact-form">
										<div class="row form-row">
											<div class="col-xs-12 col-sm-6 col-md-4 animatedBlock contactf"><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="YOUR NAME"/></span></div>
											<div class="col-xs-12 col-sm-6 col-md-4 animatedBlock contactf"><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="EMAIL"/></span></div>
											<div class="col-xs-12 col-sm-12 col-md-4 animatedBlock contactf"><span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="PHONE NUMBER"/></span></div>
										</div>
										<div class="row form-row">
											<div class="col-xs-12 contactf animatedBlock"><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="WRITE YOUR MESSAGE HERE"></textarea></span></div>
										</div>
										<div class="row form-row">
											<div class="submit-wrapper col-xs-12 contactf animatedBlock">
												<div class="submit-wrap"><input type="submit" value="Leave message" class="wpcf7-form-control wpcf7-submit c-btn b-50 black hv-yellow-o"/><i class="fa fa-angle-right" aria-hidden="true"></i></div>
											</div>
										</div>
									</div>
									<div class="wpcf7-response-output wpcf7-display-none"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<footer class="footer">
			<div class="map-wrapper">
				<div class="map-wrap">
					<div class="map-block" id="map-canvas" data-marker="images/map_marker.png" data-lat="26.268431" data-lng="73.035687" data-zoom="14" data-style="style-1">
					</div>
				</div>
				<div class="contacts">
					<div class="address">
						M. B. M. Engineering College,<br>
						J N Vyas University,<br>
						Air Force Area,Jodhpur, Rajasthan<br>
						342011
					</div>
					<a>7821905269</a>
				</div>
			</div>
			<div class="copy">
				© 2017, Enthusia. All Rights Reserved. 
			</div>
		</footer>
		<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.mina752.js?ver=4.11.2.1'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
		<script src="js/index_timer.js"></script>
		<script type='text/javascript' src='wp-includes/js/wp-embed.minfe9d.js?ver=4.7.3'></script>
		<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mina752.js?ver=4.11.2.1'></script>
	</body>
</html>

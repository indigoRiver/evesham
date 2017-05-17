<?php
define("BASE_DIR", "/~marina/");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require_once("db_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Evesham Marina, Worcestershire - Evesham Marina</title>
</head>
<body>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
  <meta content="Evesham Marina, Marina in Worcestershire" name="keywords">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript">
	<meta content="Welcome to Evesham Marina, the premier marina and boat sales brokerage specialists in Worcestershire. For more information on the boats we have in stock, call 01386 768 500." name="description">
	<meta content="Evesham Marina" name="author">
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/styles.php?pageid=9950" id="mainStyle" rel="stylesheet" type="text/css">
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.datePicker.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.validate.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/validation.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/carousel.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.ad-gallery.js" type="text/javascript">
	</script>
	<link href="<?php echo bloginfo('template_url'); ?>/includes/datepick/DateTimePicker.css" rel="stylesheet" type="text/css">
	<script src="<?php echo bloginfo('template_url'); ?>/includes/datepick/DateTimePicker.js" type="text/javascript">
	</script><!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="DateTimePicker-ltie9.css" /><script type="text/javascript" src="/includes/datepick/DateTimePicker-ltie9.js"></script><![endif]-->
	<script src="<?php echo bloginfo('template_url'); ?>/includes/datepick/i18n/DateTimePicker-i18n.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/lightbox.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/jquery.nivo.slider.pack.js" type="text/javascript">
	</script>
	<meta content="t5LTyzn5_46KjjZE8a49bjTlsYn_36mYALYj76RX7pg" name="google-site-verification">
	<script src="http://www.yourcms.info/CMSv3/slimstat/?js&amp;memberid=908" type="text/javascript">
	</script>
	<script async src="https://www.google-analytics.com/analytics.js">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/vTicker/vTicker.js" type="text/javascript"></script>
	</script>
	<script>
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	 ga('create', 'UA-63015465-16', 'auto');
	 ga('send', 'pageview');

	</script>
	<script type="text/javascript">
	   $('link[id="mainStyle"]').attr('disabled', 'disabled');

	$(document).ready(function(){
	   $(".price").each(function(index){
	       var removeTrailingZeros = $(this).text().split(".");
	       removeTrailingZeros = removeTrailingZeros[0];
	       $(this).text(removeTrailingZeros);
	       console.log(removeTrailingZeros);
	   })
	})
	</script>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<style id="rs-plugin-settings-inline-css" type="text/css">
	   .tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
	</style>
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/external.css" id="wpcharming-style-css" media="all" rel="stylesheet" type="text/css">
	<!--<link href="http://cms.pm/uploads/86.seesites.biz_--_483317998.css" id="wpcharming-style-css" media="all" rel="stylesheet" type="text/css">-->
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/composer.css" id="js_composer_front-css" media="all" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C300italic%2C400italic%2C600italic%2C700italic%2C800italic%7CSource+Sans+Pro%3A200%2C300%2C400%2C600%2C700%2C900%2C200italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic&amp;ver=1440602883" id="redux-google-fonts-css" media="all" rel="stylesheet" type="text/css">
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/custom.css" id="wpcharming-vccustom-css" media="all" rel="stylesheet" type="text/css">
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/responsive.css" rel="stylesheet">
	<script type="text/javascript">
	       var header_fixed_setting = {"fixed_header":"1"};
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/nav.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/tools.min.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/revolution.min.js" type="text/javascript">
	</script>
	<script src="<?php echo bloginfo('template_url'); ?>/includes/js/modern.min.js" type="text/javascript">
	</script> <!--[if lt IE 9]><script src="includes/js/html5.min.js"></script><![endif]-->
	<link href="http://cms.pm/uploads/evesham189favicon.ico" rel="shortcut icon">
	<style id="theme_option_custom_css" type="text/css">
	   .main-navigation { border-top: none !important; } #rev_slider_1_1_wrapper {min-width: 100% !important; margin-left: 0px !important; left: 0px !important;} .mifw {width: 100% !important;} .wpc-menu > li.current-menu-item > a, .wpc-menu > li.current-menu-ancestor > a { border-color: #fff !important;} .wpc-menu > li:hover > a { border-color: #fff !important;} .clientsize {font-size: 11px;} .btn a:hover {color: #222 !important;} .btn:hover {color: #222 !important;} .wpc-menu ul li { background-color: #F0F0F0 !important; font-weight: normal !important; } .contact-box a:hover {color: #fff !important;} .ctatop {color: #222222 !important;} .movexero {margin-top: 30px;} .sidebar { width: 25.1553%; } .content-area { width: 74.8447%; } .widget-area .sidebar-file-button { width: 108% !important;} .slider-content-box .slider-content-box { padding: 15px 25px 25px; word-break: break-word !important; max-width: 532px !important; } .slider-content-box .slider-content-box h2 { font-weight: bold; color: #ffffff !important; margin-bottom: 15px; padding-bottom: 10px; font-size: 40px; border-bottom: 1px solid #fff !important; } .slider-content-box .slider-content-box h2 span { font-weight: 400; } .slider-content-box .slider-content-box .content-box { color: #ffffff !important; margin-bottom: 18px; } @media only screen and (max-width: 767px) { .contact-box {display: none !important;} .showit {display: block !important; margin-left: 50px !important; margin-top: -20px !important; margin-bottom: -20px !important; } .extrac {margin-top: -40px !important;} .extrac h2 {font-size: 22px !important;} .extrac .btn-regular {margin-top: -15px !important; margin-bottom: -15px !important; display: block !important; } .hideslide {display: none !important;} .header-left {margin-top: -20px !important;} }
	</style>
	<style class="options-output" title="dynamic-css" type="text/css">
	       .site-branding{margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0;}a, .primary-color, .wpc-menu.wpc-menu-mobile li.current-menu-item a, .wpc-menu.wpc-menu-mobile li li.current-menu-item a,
	       .wpc-menu.wpc-menu-mobile a:hover, .topbar-menu li a:hover, .nav-social a:hover, .entry-footer .post-categories li a:hover, .entry-footer .post-tags li a:hover,
	       .medium-heading-inverted, .grid-item .grid-title a:hover, .heading-404, .widget a:hover, .widget #calendar_wrap a,
	       .widget_recent_comments a, #secondary .widget.widget_nav_menu ul li a:hover, #secondary .widget.widget_nav_menu ul li.current-menu-item a,
	       .iconbox-wrapper .iconbox-icon .primary, .iconbox-wrapper .iconbox-image .primary, .iconbox-wrapper a:hover, .breadcrumbs a:hover,
	       .header-contact-wrapper li .box-icon i
	       {color:#009fe3;}input[type="reset"], input[type="submit"], input[type="submit"], .header-right .header-contact-box .box-icon i,
	       .wpc-menu ul li, .loop-pagination a:hover, .loop-pagination span:hover, .loop-pagination a.current, .loop-pagination span.current,
	       .footer-connect .footer-social a:hover i, .entry-content .wpb_content_element .wpb_tour_tabs_wrapper .wpb_tabs_nav li.ui-tabs-active a, .entry-content .wpb_content_element .wpb_accordion_header li.ui-tabs-active a,
	       .btn, .btn-primary, .custom-heading .heading-line, .custom-heading .heading-line.primary
	       {background-color:#009fe3;}textarea:focus,
	       input[type="date"]:focus,
	       input[type="datetime"]:focus,
	       input[type="datetime-local"]:focus,
	       input[type="email"]:focus,
	       input[type="month"]:focus,
	       input[type="number"]:focus,
	       input[type="password"]:focus,
	       input[type="search"]:focus,
	       input[type="tel"]:focus,
	       input[type="text"]:focus,
	       input[type="time"]:focus,
	       input[type="url"]:focus,
	       input[type="week"]:focus, .header-right .header-contact-box .box-icon,
	       .wpc-menu > li:hover > a, .wpc-menu > li.current-menu-item > a, .wpc-menu > li.current-menu-ancestor > a,
	       .entry-content blockquote{border-color:#009fe3;}#secondary .widget.widget_nav_menu ul li.current-menu-item a:before {border-left-color:#009fe3;}.secondary-color, #comments .comment .comment-wrapper .comment-meta .comment-time:hover, #comments .comment .comment-wrapper .comment-meta .comment-reply-link:hover, #comments .comment .comment-wrapper .comment-meta .comment-edit-link:hover,
	       .iconbox-wrapper .iconbox-icon .secondary, .iconbox-wrapper .iconbox-image .secondary{color:#307520;}.btn-secondary, .custom-heading .heading-line.secondary{background-color:#009fe3;}.entry-meta .sticky-label,.inverted-column > .wpb_wrapper, .inverted-row{background-color:#f4f3ee;}.site{background-color:#ffffff;}.layout-boxed{background-color:#333333;background-repeat:repeat;background-size:inherit;background-attachment:inherit;background-position:left top;background-image:url('http://ac-accounts.co.uk/wp-content/uploads/2015/02/footer_lodyas.png');}body{font-family:Open Sans;font-weight:normal;color:#555555;font-size:14px;}h1,h2,h3,h4,h5,h6,.wpc-menu a{font-family:Source Sans Pro;}.header-right{margin-top:52px;margin-right:0;margin-bottom:0;margin-left:0;}.main-navigation{background-color:#575656;}.main-navigation{border-top:3px solid #dddddd;}.nav-social a{color:#ffffff;}
	   h1.heading-title {
	   font-weight: 600;
	   letter-spacing: -0.3px;
	   margin-bottom: -5px;
	   font-family: Source Sans Pro;
	   font-size: 26px;
	}
	</style>
	<link href="<?php echo bloginfo('template_url'); ?>/includes/css/seo.css" rel="stylesheet">
	<style type="text/css">
	#html5-text {color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}.html5-description {color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}.html5-error {text-align:center; color:#ff0000; font-size:14px; font-family:Arial, sans-serif;}
	</style>
	<div id="overlay" style="display: none; position: absolute; top: 0px; left: 0px; z-index: 90; width: 100%;">
		<a href="#"><img id="loadingImage" src="<?php echo bloginfo('template_url');?>/images/loading.gif" style="position: absolute; z-index: 150;"></a>
	</div>
	<div id="lightbox" style="display: none; position: absolute; z-index: 100;">
		<a href="#" title="Click to close"><img id="lightboxImage"><img id="closeButton" src="<?php echo bloginfo('template_url');?>/images/close.gif" style="position: absolute; z-index: 200;"></a>
		<div id="lightboxDetails">
			<div id="lightboxCaption" style="display: none;"></div>
			<div id="keyboardMsg">
				press <a href="#" onclick="hideLightbox(); return false;"><kbd>x</kbd></a> to close
			</div>
		</div>
	</div>
	<div class="seo-pin">
		<img alt="SEO Pin" height="25" src="<?php echo bloginfo('template_url'); ?>/images/pin.png">
		<ul>
			<li>
				<a href="/boat-brokerage" title="Boat Brokerage">Boat Brokerage</a>
			</li>
			<li>
				<a href="/boat-building" title="Boat Building">Boat Building</a>
			</li>
			<li>
				<a href="/boat-chandlery" title="Boat Chandlery">Boat Chandlery</a>
			</li>
			<li>
				<a href="/boat-craning" title="Boat Craning">Boat Craning</a>
			</li>
			<li>
				<a href="/boat-heating" title="Boat Heating">Boat Heating</a>
			</li>
			<li>
				<a href="/boat-painting" title="Boat Painting">Boat Painting</a>
			</li>
			<li>
				<a href="/boat-sales" title="Boat Sales">Boat Sales</a>
			</li>
			<li>
				<a href="/moorings" title="Moorings">Moorings</a>
			</li>
			<li>
				<a href="/narrowboats-for-sale" title="Narrowboats For Sale">Narrowboats For Sale</a>
			</li>
			<li>
				<a href="/sailaway-canal-boats" title="Sailaway Canal Boats">Sailaway Canal Boats</a>
			</li>
			<li>
				<a href="/sailaway-narrowboats" title="Sailaway Narrowboats">Sailaway Narrowboats</a>
			</li>
			<li>
				<a href="/sailaway-wide-beam-boats" title="Sailaway Wide Beam Boats">Sailaway Wide Beam Boats</a>
			</li>
			<li>
				<a href="/sailaways" title="Sailaways">Sailaways</a>
			</li>
			<li>
				<a href="/used-narrowboats" title="Used Narrowboats">Used Narrowboats</a>
			</li>
			<li>
				<a href="/wide-beam-boats-for-sale" title="Wide Beam Boats For Sale">Wide Beam Boats For Sale</a>
			</li>
		</ul>
	</div>
	<div id="toTop"></div>
	<div class="mains" id="main">
		<header id="header">
			<div class="head_space"></div>
		</header>
		<nav id="navigation">
			<ul id="nav">
				<li class="firstel">
					<a href="<?php echo BASE_DIR; ?>" title="Evesham Marina Home">Home</a>
				</li>
			</ul>
		</nav>
		<section id="body">
			<section id="body_text">
				<aside id="body_text_inner">
					<div class="hfeed site" id="page">
						<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
						<header class="site-header" id="masthead" role="banner">
							<div class="container">
								<div class="header-left">
									<div class="site-branding">
										<a href="<?php echo BASE_DIR; ?>" rel="home" title="Evesham Marina"><img alt="Evesham Marina Logo" src="<?php echo bloginfo('template_url');?>/img/evesham-marina.png"></a>
									</div>
								</div>
								<div class="header-right">
									<div class="header-right-widgets clearfix">
										<aside class="header-right-widget widget_text">
											<div class="textwidget">
												<ul class="header-contact-wrapper">
													<li>
														<div class="contact-box">
															<div class="box-text left">
																<div class="contact-text">
																	Worcestershire&#39;s premier marina for all your boating needs.<span class="spacer"></span>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="contact-box showit">
															<div class="box-text right">
																<a class="btn btn-secondary" href="tel:01386768500"><i class="fa fa-phone"></i> Call: 01386 768 500</a>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</aside>
									</div>
								</div>
							</div>
						</header>
						<nav class="main-navigation fixed-on" id="site-navigation" role="navigation">
							<div class="container">
								<div id="nav-toggle">
									<i class="fa fa-bars"></i>
								</div>
								<?php
								$page = end((explode('/', $_SERVER['PHP_SELF'])));
								?>
								<ul class="wpc-menu">
									<li <?php if($page == 'index.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/home/">Home</a>
									</li>
									<li <?php if($page == 'the-marina.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/the-marina/">The Marina</a>
									</li>
									<?php
									$salesPages = array('boat-sales.php', 'new-boats.php', 'sailaways.php', 'brokerage.php', 'buying-a-boat.php', 'selling-a-boat.php', 'testimonials.php', 'faq.php', 'jargon-buster.php');
									?>
									<li  <?php if(in_array($page, $salesPages)) {echo 'class="current-menu-item current_page_item menu-item-has-children"';} ?> class="menu-item-has-children">
										<a href="<?php echo bloginfo('url'); ?>/boat-sales/">Boat Sales</a>
										<ul class="sub-menu">
											<li>
												<a href="<?php echo bloginfo('url'); ?>/new-boats/">New Boats</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/sailaways/">Sailaways</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/brokerage/">Brokerage</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/buying-a-boat/">Buying a Boat</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/selling-a-boat/">Selling a Boat</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/testimonials/">Testimonials</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/faq/">FAQ</a>
											</li>
											<li>
												<a href="<?php echo bloginfo('url'); ?>/jargon-buster/">Jargon Buster</a>
											</li>
										</ul>
									</li>
									<li <?php if($page == 'moorings.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/moorings/">Moorings</a>
									</li>
									<li <?php if($page == 'chandlery.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/chandlery/">Chandlery</a>
									</li>
									<li <?php if($page == 'marina-services.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/marina-services/">Marina Services</a>
									</li>
									<li <?php if($page == 'out-and-about.php') {echo 'class="current-menu-item current_page_item"';} ?>>
										<a href="<?php echo bloginfo('url'); ?>/out-and-about/">Out And About</a>
									</li>
								</ul>
								<div class="nav-social" style="margin-left: 2em">
									<a href="https://twitter.com/hashtag/eveshammarina" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a> <a href="https://en-gb.facebook.com/EveshamMarina/" target="_blank" title="Facebook"><i class="fa fa-facebook-official"></i></a> <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin-square"></i></a> <a href="https://plus.google.com/113316520837444560941/about" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</nav>
						<div class="clear"></div>
						<div class="site-content" id="content">
							<div class=" full-screen" id="content-wrap">
								<div class="content-area-full" id="primary">
									<main class="site-main" id="main" role="main">
										<article class="post-6 page type-page status-publish hentry" id="post-6">
											<div class="entry-content">
												<div class="vc_row wpb_row vc_row-fluid hideslide" id="wpc_564dcdba48e6a">
													<div class="row_inner_wrapper clearfix" style="background-position: left top;background-repeat: no-repeat;background-size: inherit;margin-top: -63px;padding-bottom: 0px;">
														<div class="row_inner row_fullwidth_content clearfix">
															<div class="vc_col-sm-12 wpb_column vc_column_container" style="padding: 0;">
																<div class="wpb_wrapper">
																	<div class="wpb_revslider_element wpb_content_element">
																		<div class="forcefullwidth_wrapper_tp_banner" style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px">
																			<script src="<?php echo bloginfo('template_url');?>/ResponsiveSlides/responsiveslides.min.js"></script>
																			<style>
																			.rslides {
																				position: relative;
																				list-style: none;
																				overflow: hidden;
																				width: 100%;
																				padding: 0;
																				margin: -8px;
																				left: -20px;
																			}

																			.rslides li {
																				-webkit-backface-visibility: hidden;
																				position: absolute;
																				display: none;
																				width: 100%;
																				left: 0;
																				top: 0;
																			}

																			.rslides li:first-child {
																				position: relative;
																				display: block;
																				float: left;
																			}

																			.rslides img {
																				display: block;
																				height: auto;
																				float: left;
																				width: 100%;
																				border: 0;
																			}
																			</style>

																			<script>
																				$(function(){
																					$('.rslides').responsiveSlides();
																				});
																			</script>
																			<!-- IMAGE SLIDESHOW TO GO HERE -->
																			<?php
																			//$path = pathinfo(__FILE__)['filename'];
																			//$base = pathinfo(__FILE__)['dirname'];
																			$file = ($_SERVER['PHP_SELF']);
																			$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
																			$path = str_replace("/websites/eveshamMarina/", "", $withoutExt);
																			define('IMAGEPATH', 'C:/xampp/htdocs/Websites/eveshamMarina/wp-content/themes/evesham/slider/'.$path.'/');
                                      chdir(IMAGEPATH);
                                      ?>
																			<ul class="rslides">
																				<?php
																				foreach(glob('*') as $filename) {
																					echo '<li><img src="http://localhost/Websites/eveshamMarina/wp-content/themes/evesham/slider/'.$path.'/'.basename($filename).'" /></li>';
																				}
																				?>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_row wpb_row vc_row-fluid inverted-row extrac" id="wpc_564dcdba52231">
													<div class="row_inner_wrapper clearfix" style="background-color: #009fe3;background-position: left top;background-repeat: no-repeat;background-size: inherit;padding-top: 15px;padding-bottom: 15px;">
														<div class="row_inner container clearfix">
															<div class="row_full_center_content clearfix">
																<div class="vc_col-sm-8 mobile-center wpb_column vc_column_container">
																	<div class="wpb_wrapper">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<div>
																					<h2 style="color: #ffffff; font-size: 25px; display: block; margin-top: -2px;">Welcome to Evesham Marina</h2>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="vc_col-sm-4 mobile-center wpb_column vc_column_container">
																	<div class="wpb_wrapper">
																		<div class="wpb_text_column wpb_content_element">
																			<div class="wpb_wrapper">
																				<p><a class="btn btn-regular btn-custom right ctatop" href="<?php echo BASE_DIR; ?>contact.php" style="margin-top: 0px; margin-bottom: 0px; margin-right: 0px; background-color: #ffffff;">Contact Us</a></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

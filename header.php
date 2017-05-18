<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-4445048307959749",
		    enable_page_level_ads: true
		  });
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php include_once("analyticstracking.php") ?>
		<!-- header -->
		<div class="header">
				<div class="row headeradds">
					<div id="leftadd" class=" col-m-4 ">
						<p>
						A World of 0's and 1's
						</p>
					</div>
					<div id="centeradd" class=" col-m-4">0010101010011 wali</div>
					<div id="rightadd" class="col-m-4">Code,Detail, Examples, Video , Urdu </div>
				</div>
				
			<h3 id="slideid">bitwali</h3>
		  	<!-- top menu -->
		  	<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'header-menu',
									'menu_class' => 'topnav'
								)
							);
						?>
			<!-- <ul class="topnav " >
				
				<li><a class="active" href="#home">Home</a></li>
				<li><a href="#news">News</a></li>
				<li><a href="#contact">Contact</a></li>
				 <li class="right"><a href="#about">About</a></li> 
			 </ul> --> 
		</div> 
		<!-- End of header -->
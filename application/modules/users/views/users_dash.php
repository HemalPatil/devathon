<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/favicon/apple-icon-57x57.png')?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/favicon/apple-icon-60x60.png')?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/favicon/apple-icon-72x72.png')?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/favicon/apple-icon-76x76.png')?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/favicon/apple-icon-114x114.png')?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/favicon/apple-icon-120x120.png')?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/favicon/apple-icon-144x144.png')?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/favicon/apple-icon-152x152.png')?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-icon-180x180.png')?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/favicon/android-icon-192x192.png')?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png')?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon/favicon-96x96.png')?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png')?>">
	<link rel="manifest" href="<?php echo base_url('assets/favicon/favicon-32x32.png')?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets/favicon/ms-icon-144x144.png')?>">
	<meta name="theme-color" content="#ffffff">
	<!-- Jquery UI -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/materialize/crop/imgareaselect-default.css" />
	<link href="<?php echo base_url('assets/jquery-ui/jquery-ui.css')?>" rel="stylesheet" type="text/css" />
	<link rel="icon" href="<?php echo base_url('assets/images/favicon-32x32.png')?>" sizes="32x32">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/favicon/apple-touch-icon-152x152.png')?>">
	<meta name="msapplication-TileColor" content="#00bcd4">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/mstile-144x144.png')?>">
	

	<link href="<?php echo base_url('assets/materialize/mat/css/materialize.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/materialize/mat/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/materialize/mat/css/custom-style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">


	<link href="<?php echo base_url('assets/materialize/mat/js/plugins/perfect-scrollbar/perfect-scrollbar.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/materialize/mat/js/plugins/jvectormap/jquery-jvectormap.css')?>" type="text/css?>" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/materialize/mat/js/plugins/fullcalendar/css/fullcalendar.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/materialize/mat/js/plugins/data-tables/css/jquery.dataTables.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
	
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/mat/js/jquery-1.11.2.min.js')?>"></script>  
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/mat/js/materialize.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/chartjs/Chart.bundle.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/mat/js/plugins/data-tables/js/jquery.dataTables.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/mat/js/plugins/data-tables/data-tables-script.js')?>"></script>
</head>
<body>
	<header id="header" class="page-topbar">
		<div class="navbar-fixed">
			<nav class="cyan">
				<div class="nav-wrapper">
					<ul class="left">                      
						<li><h1 class="logo-wrapper"><a href="<?php echo base_url('admin');?>" class="brand-logo darken-1">Conference</a></h1></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div id="main">
		<div class="wrapper">
			<aside id="left-sidebar-nav">
				<ul id="slide-out" class="side-nav fixed leftside-navigation">					
					<li class="bold active"><a href="<?php echo base_url('/admin')?>" class="waves-effect waves-cyan"><i class="mdi-action-home"></i>Home</a>
					</li>
					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li class="bold">
								<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-spellcheck"></i>Papers
								</a>
								<div class="collapsible-body">
									<ul>
										<li><a href="<?php echo base_url('users/my_papers')?>">My Papers</a>
										</li>
										<li><a href="<?php echo base_url('users/upload_paper')?>">Upload Paper</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
			</aside>
			<section>
				<div class="container">

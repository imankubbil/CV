
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Basic -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nur Iman - Resume</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- Load Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/glitche-basic.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/glitche-layout.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css" />
	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/man1.png">
	<link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>assets/images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>assets/images/favicons/apple-touch-icon-114x114.png">
	
</head>

<body>	
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="pre-inner">
					<div class="load typing-load"><p>loading...</p></div>
					<span class="typed-load"></span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Container -->
	<div class="container">
		
		<!-- Header -->
		<header>
			<div class="head-top">
				<a href="#" class="menu-btn"><span></span></a>
				<div class="top-menu">
					<ul>
						<li <?php if($this->uri->segment(2)=="") { echo 'class="active"'; } ?>>
							<a href="<?=base_url()?>resume" class="lnk">Beranda</a>
						</li>
						<li <?php if($this->uri->segment(2)=="cv") { echo 'class="active"'; } ?>>
							<a href="<?=base_url()?>resume/cv" class="lnk">Curriculum Vitae</a>
						</li>
						<li <?php if($this->uri->segment(2)=="port") { echo 'class="active"'; } ?>>
							<a href="<?=base_url()?>resume/port" class="lnk">Portfolio</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
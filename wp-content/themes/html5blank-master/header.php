<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"> </script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<?php wp_head(); ?>
			<script type="text/javascript">
				$(document).ready(function() {
			  		$("#accordion").accordion();
				});
			</script>
	</head>
	<body>
		<!-- wrapper -->
		<div id="pageOuter" class="row-fluid">
			<!-- header -->
			<header class="row-fluid">
				<div class="span12">
					<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/flag.png" alt="Palmerton, PA United Veterans Organization" class="pull-left hidden-phone" id="flag"></a>
					<h1>
                       	Palmerton, Pa<br>
                        United <br>
                        Veterans<br> 
                        Organization
                  	</h1>				
					<img class="hidden-phone hidden-tablet" src="<?php echo get_template_directory_uri(); ?>/img/logoLegionEmblem.png" alt="American Legion Logo" id="legionLogo"/>
                  	<img class="hidden-phone hidden-tablet" src="<?php echo get_template_directory_uri(); ?>/img/vfw.jpg" alt="VFW Logo" id="vfwLogo"/>

				</div>
			</header>
			<!-- /header -->	
			<?php 
				$directoryURI = $_SERVER['REQUEST_URI'];
				$path = parse_url($directoryURI, PHP_URL_PATH);
				$components = explode('/', $path);
				$first_part = $components[2];
			?>				

			<!-- nav -->
			<div id="navigation" class="row-fluid">
            	<nav class="span12 navbar navbar-default" role="navigation">
		 			<div class="navbar-inner">
                    	<div class="container-fluid">
                        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    	<div class="nav-collapse collapse">
							<ul class="nav menu nav-pills" >
								<li class="<?php if ($first_part=="") {echo "active"; }?>"><a href="<?php echo home_url(); ?>" >Home</a></li>
								<li class="deeper parent <?php if ($first_part=="about-us") {echo "active"; } ?>"><a href="<?php echo home_url(); ?>/about-us" >About</a>
									<ul class="nav-child unstyled small">
										<li class="<?php if ($first_part=="palmerton-american-legion-post-269") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/about-us/palmerton-american-legion-post-269" >American Legion Post #269</a></li>
										<li class="<?php if ($first_part=="palmerton-vfw-post-7134") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/about-us/palmerton-vfw-post-7134" >VFW Post #7134</a></li>
										<li><a href="<?php echo home_url(); ?>/about-us/directions-to-meetings" >Directions to Meetings</a></li>
									</ul>	
								</li>
								<li class="deeper parent <?php if ($first_part=="join") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/join" >Join</a>
									<ul class="nav-child unstyled small">
										<li class="<?php if ($first_part=="join-the-american-legion") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/join/join-the-american-legion" >Join the Legion</a></li>
										<li class="<?php if ($first_part=="join-the-vfw") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/join/join-the-vfw" >Join the VFW</a></li>
									</ul>
								</li>
								<li class="<?php if ($first_part=="in-the-news") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/in-the-news" >In The News</a></li>
								<li class="<?php if ($first_part=="photo-galleries") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/photo-galleries" >Photo Galleries</a></li>
								<li class="deeper parent <?php if ($first_part=="the-palmerton-veterans-memorial") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/the-palmerton-veterans-memorial" >Our Veterans Memorial</a>
									<ul class="nav-child unstyled small">
										<li class="<?php if ($first_part=="directions-to-the-memorial") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/the-palmerton-veterans-memorial/directions-to-the-memorial" >Directions to the Memorial</a></li>
									</ul>
								</li>
								<li class="<?php if ($first_part=="links") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/links" >Links</a></li>
								<li class="<?php if ($first_part=="contact") {echo "active"; }?>"><a href="<?php echo home_url(); ?>/contact" >Contact </a></li>
							</ul>
                    	</div>
                	</div>
            	</div>
      		</nav>
    	</div>  
		<!-- /nav -->

			
			
<!DOCTYPE html>
<html>
<head>
<title><?php get_my_title_tag(); ?></title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />  

<!--Meta-->
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- Start WP Head -->
<?php wp_head(); ?>


<!-- End WP Head -->
  
</head>
<body <?php body_class(); ?> id="home">

<div id="wrapper">

<header>
							<!--SOCIAL MEDIA BUTTONS-->
	<nav id="nav-social">
    	<ul>
		<!--email:-->
			<li><a href="javascript:;" title="Link to Contact Form"><img src="<?php bloginfo('template_directory'); ?>/images/email-32.png" alt="Email Icon" /></a></li> 
		<!--pinterest:-->
			<li><a href="javascript:;" title="Link to Pinterest Page"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest-32.png" alt="Pinterest Icon" /></a></li>
		<!--Instagram:-->
			<li><a href="javascript:;" title="Link to Instagram Page"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-32.png" alt="Instagram Icon" /></a></li>
		<!--Tumblr:-->
			<li class="last"><a href="javascript:;" title="Link to Tumblr Page"><img src="<?php bloginfo('template_directory'); ?>/images/tumblr-32.png" alt="Tumblr Icon" /></a></li>
        </ul>
      </nav>  
<h1>
<a href="../wordpress/">
<img src="<?php bloginfo('template_directory'); ?>/images/LogoForWebsite-200.png" id="logo" alt="Halie Schwartz"/>
<span>Halie Schwartz</span></a>	<!--for SEO-->
</h1>
</header>

<!--<nav id="nav-mobile">			Responsive, for mobile screens
    <a class="menu-button" href="#nav-foot" onclick="toggleNav(); return false;">&#9776;  MENU</a>
    <ul id="nav-toggle">
    	<li><a href="javascript:;">Home</a></li>
    	<li><a href="javascript:;">About</a></li>
    	<li><a href="javascript:;">Sitemap</a></li>
    	<li><a href="javascript:;">Contact</a></li>
    </ul>
</nav>-->

<!-- Begin new Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu','container' => 'nav','container_id' => 'nav-main')); ?>

<!-- End new Navigation -->

<div id="middle">
<!--This is the middle div-->
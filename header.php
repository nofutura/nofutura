<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css.map" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/all.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/js/ready.js" as="script">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=1.0.2">  
  <title>NOFUTURA</title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <nav class="navbar navbar-expand-md fixed-top p-0">
    <a href="/">
      <img src="<?php echo get_template_directory_uri(); ?>/img/nofuturalogo.svg" style="width: 300px;" id="logo" class="py-4 skip-lazy" />
    </a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/burgermenu.png" class="img-fluid" />
        </span>
        </button>
        <div class="container">
        <div class="collapse navbar-collapse site-links" id="navbarCollapse">
			<ul class="navbar-nav ml-auto">					
			<?php $menu = wp_nav_menu('menu-1'); 
			foreach($menu as $me): ?>
				<li class="nav-item">
			  		<a class="nav-link site-links" href="<?php $me->url; ?>"><?php $me->title; ?></a>
			  	</li>
			<?php endforeach; ?>
			</ul>
        </div>  
      </div>
    </nav>
</header>
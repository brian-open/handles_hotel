<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" href="https://use.typekit.net/duk7skg.css">

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>


<!-- ================================================================================================================ -->
<!-- MODAL MENU -->
<!-- ================================================================================================================ -->


<!-- .modal-menu-->
<div class="mobile-modal-menu">
		<a class="logo-white" href="<?php echo get_site_url(); ?>">HANDEL'S HOTEL</a>
		<nav class="mobile-nav">
			<?php wp_nav_menu( array( 'menu' => 'mobile') ); ?>
		</nav>
<div class="shape-left"></div>
<div class="shape-right"></div>
</div><!--/.modal-menu-->


<!-- ================================================================================================================ -->
<!-- HEADER AREA -->
<!-- ================================================================================================================ -->


<div class="burger-block">
	<button class="hamburger hamburger--spin" type="button">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
</div>

<header>
	<div class="row">
			
		<a class="logo" href="<?php echo get_site_url(); ?>">HANDEL'S HOTEL</a>

		<div class="main-navigation">
			<?php wp_nav_menu( array( 'menu' => 'main') ); ?>
			<?php wp_nav_menu( array( 'menu' => 'main-secondary') ); ?>
		</div>

	</div><!--/.row-->
</header>







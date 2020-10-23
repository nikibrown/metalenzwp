<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package m
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_directory' ); ?>/assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<?php 
	global $post;
	$parents = get_post_ancestors( $post->ID );
	$id = ($parents) ? $parents[count($parents)-1]: $post->ID;
	$page_ancestor = "page-ancestor-" . $id;

?>

								

<body <?php body_class($page_ancestor ); ?>>

<?php wp_body_open(); ?>


<header>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-4">
					<a href="/">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/metalenz-logo.svg" alt="Metalenzm" class="brand-logo">
					</a>
				</div>

				<div class="col-lg-8 sub-nav">
					<ul class="list-inline">
						<li class="list-inline-item">
							<form role="search" action="<?php echo home_url( '/' ); ?>" method="get" class="header-search-form form-inline my-2 my-lg-0">
								<input class="header-top-search form-control mr-sm-2" type="Search" value="<?php the_search_query(); ?>" aria-label="Search" name="s" id="s">
								<span id="search-label" class="search-label d-inline-block">Search <i class="fas fa-search"></i></span>
							</form>
						</li>
						<li class="list-inline-item"><a href="mailto:<?php the_field('header_contact_email', 'option'); ?>">Contact <i class="fas fa-at"></i></a></li>
					</ul>

					<p class="tagline"><?php the_field('header_tagline', 'option'); ?></p>
				</div>

			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span>Menu</span> <i class="fas fa-bars"></i>
				</button>
			  
				<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<?php $defaults = array(
					'menu' => 'Main Nav',
					'container'       => '',
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>'				
				);
				?>

				<?php wp_nav_menu( $defaults ); ?>
				</div>
			  </nav>
		</div>
	</div>	
</header>

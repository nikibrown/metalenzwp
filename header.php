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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
						<li class="list-inline-item"><a href="mailto:<?php the_field('footer_email', 'option'); ?>">Contact <i class="fas fa-at"></i></a></li>
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

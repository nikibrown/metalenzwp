<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package m
 */

get_header();
?>

<?php 
/**
 * The template for displaying news & Events
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<?php get_template_part( 'template-parts/content', 'page-header' ); ?>	
	<main class="page-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						<ol class="breadcrumb">
							<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="<?php echo home_url(); ?>" itemprop="item">Home</a></li>
							<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">News and Publications</a></li>
							<li class="breadcrumb-item"><?php the_title();?></li>						
						</ol>
					</nav>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<article>
						<?php the_content(); ?>
					</article>
					
				</div>
			</div>
		</div>
	</main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>


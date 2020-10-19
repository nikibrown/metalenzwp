<?php  /* Template Name: Page Full Width
/**
 * The template for displaying all pages
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

	<section class="page-subheader pabe-subheader-pink">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					</nav>

					<div class="text-container">
						<?php if( get_field('page_intro') ): ?>
							<h2><?php the_field("page_intro"); ?></h2>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5">
					<div class="page-subheader-img" style="background-image: url('<?php the_field("page_subheader_image"); ?>');">
					</div>
				</div>
			</div>
		</div>
	</section>


	<main class="page-no-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<article>
						<?php the_content(); ?>
					</article>
				</div>
			</div>
		</div>
	</main>

	
	<?php get_template_part( 'template-parts/content', 'related-cta' ); ?>	

	<?php get_template_part( 'template-parts/content', 'bottom-banner-cta' ); ?>	


<?php endwhile; endif; ?>

<?php get_footer(); ?>

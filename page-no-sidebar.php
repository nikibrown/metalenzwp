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

	<?php get_template_part( 'template-parts/content', 'page-subheader' ); ?>	

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

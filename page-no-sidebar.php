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

	
	<?php if( have_rows('related_cta') ): ?>
		<?php while( have_rows('related_cta') ): the_row(); ?>
			<section class="related-cta">
				<div class="related-cta-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h2><?php the_sub_field("related_cta_headline"); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="related-cta-middle">
					<div class="container">
						<div class="row no-gutters">
							<?php if( have_rows('related_item') ): ?>
								<?php while( have_rows('related_item') ): the_row(); ?>
									<div class="col-lg col-md-12">
										<div class="photo-inner" style="background-image: url('<?php the_sub_field('related_item_image'); ?>');">
											<a href="<?php the_sub_field("related_item_cta_link"); ?>" class="btn btn-secondary"><?php the_sub_field("related_item_cta_text"); ?> <i class="fas fa-angle-right"></i>
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<div class="related-cta-bottom">
					<div class="container">
						<div class="row">
							<?php if( have_rows('related_item') ): ?>
								<?php while( have_rows('related_item') ): the_row(); ?>
									<div class="col-lg col-md-12">
										<a href="<?php the_sub_field("related_item_cta_link"); ?>" class="btn btn-secondary"><?php the_sub_field("related_item_cta_text"); ?> <i class="fas fa-angle-right"></i>
											</a>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if( have_rows('bottom_banner_cta') ): ?>
		<?php while( have_rows('bottom_banner_cta') ): the_row(); ?>
			<section class="bottom-banner-cta">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-9">
							<h2><?php the_sub_field("bottom_banner_cta_headline"); ?></h2>
							<?php the_sub_field("bottom_banner_cta_text"); ?>
						</div>
						<div class="col-lg-3">
							<a href="<?php the_sub_field("bottom_banner_cta_button_link"); ?>" class="btn btn-primary"><?php the_sub_field("bottom_banner_cta_button_text"); ?> <i class="fas fa-angle-right"></i>
								</a>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

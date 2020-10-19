<?php
/**
 * Template part for displaying Bottom Banner CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

?>

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

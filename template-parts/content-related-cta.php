<?php
/**
 * Template part for displaying related CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

?>

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

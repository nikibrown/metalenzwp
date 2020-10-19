<?php
/**
 * Template part for displaying page subheader
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

?>


	<!-- page-subheader-blue -->

	<section class="page-subheader 
		<?php if( get_field('page_subheader_gradient_color') == 'pink' ) { ?>
			page-subheader-pink
		<?php } else { ?>
			page-subheader-blue
		<?php } ?>
		">
		<div class="container">
			<div class="row
				<?php if( get_field('page_intro') ): ?>
					row-min-height
				<?php endif; ?>
			"> 
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					</nav>

					<?php if( get_field('page_intro') ): ?>
						<div class="text-container">
							<h2><?php the_field("page_intro"); ?></h2>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5">
					<?php if( get_field('page_intro') ): ?>
						<?php if( get_field('page_subheader_image') ) { ?>
							<div class="page-subheader-img" style="background-image: url('<?php the_field("page_subheader_image"); ?>');">
						<?php } else { ?>
							<div class="page-subheader-img" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/subheader.jpg');">
						<?php } ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

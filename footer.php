<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package m
 */

?>

		<footer>
			<div class="container">
				<div class="row align-items-start">
					<div class="col-lg-3">

						<div class="sub-nav">
							<ul class="list-inline">
								<li class="list-inline-item">
									<form role="search" action="<?php echo home_url( '/' ); ?>" method="get" class="header-search-form form-inline my-2 my-lg-0">
										<input class="header-top-search form-control mr-sm-2" type="Search" value="<?php the_search_query(); ?>" aria-label="Search" name="s" id="s">
										<span id="search-label" class="search-label d-inline-block">Search <i class="fas fa-search"></i></span>
									</form>
								</li>
								<li class="list-inline-item"><a href="<?php the_field('header_contact_link', 'option'); ?>">Contact <i class="fas fa-at"></i></a></li>
							</ul>

						</div>


						<?php the_field('footer_column_1', 'option'); ?>
					</div>
					<div class="col-lg-3">
						<?php the_field('footer_column_2', 'option'); ?>
					</div>
					<div class="col-lg-6">
						<?php if( have_rows('footer_social_links', 'option') ): ?>
							<ul class="list-inline social-nav">
								<?php while( have_rows('footer_social_links', 'option') ): the_row(); ?>
									<li class="list-inline-item">
										<a href="<?php the_sub_field('footer_social_link', 'option'); ?>">
											<i class="fab <?php the_sub_field('footer_social_icon', 'option'); ?> fa-2x"></i>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="col-lg-12">
						<div class="copyright">
							<?php the_field('footer_column_4', 'option'); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>




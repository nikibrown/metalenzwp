<?php 
/**
 * The template for displaying homepage
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


	
	<main>
		<section class="home-slider">
			<div class="slide" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/masthead.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<h1>
							Transforming optical sensing
							</h1>
							<p>
							Metalenz’s multifunctional optics enables entirely new forms of sensing to be achieved at mobile form factors and price poin
							</p>

							<a href="" class="btn btn-secondary">Learn More <i class="fas fa-angle-right" aria-hidden="true"></i></a>
						</div>
						<div class="col-lg-8"></div>
					</div>
				</div>
			</div>
			
		</section>

		<section class="home-cta">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="intro">
							<?php the_field("home_cta_intro_text"); ?>
						</p>
					</div>
				</div>
				<div class="row no-gutters">
					<?php $counter = 1; ?>
					<?php if( have_rows('home_cta') ): ?>
						<?php while( have_rows('home_cta') ): the_row(); ?>
							<div class="col-lg-4">
								<a href="<?php the_sub_field("cta_link"); ?>" class="cta cta-<?php echo $counter ?>">
									<h2><?php the_sub_field("cta_headline"); ?></h2>
									<?php if( get_sub_field('cta_image') ) { ?>
										<div class="photo-container" style="background-image: url('<?php the_sub_field("cta_image"); ?>');">
									<?php } else { ?>
										<div class="photo-container" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/subheader.jpg');">
									<?php } ?>
										<div class="photo-container-content">
											<p><?php the_sub_field("cta_text"); ?></p>

											<i class="fas fa-angle-right fa-2x"></i>
										</div>
									</div>
								</a>
							</div>
							<?php $counter++; ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</section>

		<section class="news-events-homepage">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<h2><?php the_field("news_events_headline"); ?></h2>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">


						<?php $args = array(
							'posts_per_page'         => '3',
						);

							// The Query
							$query = new WP_Query( $args ); ?>

							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<li>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
									<?php the_excerpt(); ?>
								</li>
								<?php endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
						
					</div>
					<div class="col-lg-3">
						<a href="<?php the_field("news_events_cta_button_link"); ?>" class="btn btn-secondary"><?php the_field("news_events_cta_button_text"); ?> <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</main>
		
			




<?php get_footer(); ?>
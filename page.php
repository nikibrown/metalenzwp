<?php /* Template Name: Page With Sidebar
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
	
	<main class="page-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					</nav>
				</div>
			</div>

			<div class="row no-gutters">
				<div class="col-lg-3 d-none d-lg-block">
					<aside>
						
							<?php 
								global $post;
								$parents = get_post_ancestors( $post->ID );
								$id = ($parents) ? $parents[count($parents)-1]: $post->ID;

								$defaults = array(
									'menu' => 'Main Nav',
									'container'       => '',
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '<ul class="list-unstyled sidebar-nav">%3$s</ul>',
									'depth'           => 0
								);

								wp_nav_menu( $defaults );
							?>

						<style>
							/* Hide all sidebar nav items that arent the current page ancestor */
													
							.page-ancestor-<?php echo $id; ?> aside li:not(.page-item-<?php echo $id; ?>) {
								display: none;
							}
							
							/* Change visibility of top level nav items (display none hides children) */

							.page-ancestor-<?php echo $id; ?> aside ul li.top-level {
								visibility: hidden;
							}

							/* Hide top level anchor link to remove space */

							.page-ancestor-<?php echo $id; ?> aside ul li.top-level > a {
								display: none;
							}

							/* Show child nav items of current page ancestor */

							.page-ancestor-<?php echo $id; ?> aside li.current_page_ancestor,
							.page-ancestor-<?php echo $id; ?> aside li.current_page_ancestor li{
								display: block;
								visibility: visible;
							}
						
							.page-ancestor-<?php echo $id; ?> aside li.page-item-<?php echo $id; ?> li { 
								display: block;
								visibility: visible;
							}		
							
							/* Only show third level nav items when on parent page */

							.page-ancestor-<?php echo $id; ?> aside .sub-menu .sub-menu {
								display: none;
							}

							.page-ancestor-<?php echo $id; ?> aside .sub-menu .current-menu-item .sub-menu,
							.page-ancestor-<?php echo $id; ?> aside .sub-menu .current-menu-ancestor .sub-menu {
								display: block;
							}
						</style>

						
					</aside>
				</div>
				<div class="col-lg-9">
					<article>
						<?php if( get_field('page_intro') ): ?>
							<p class="intro"><?php the_field("page_intro"); ?></p>
						<?php endif; ?>

						<?php the_content(); ?>
						
						<?php $counter = 1; ?>
						<?php if( have_rows('team_bio') ): ?>
							<ul class="accordion-large list-unstyled">
								<?php while( have_rows('team_bio') ): the_row(); ?>
									<li>
										<div class="accordion-button" data-toggle="collapse" data-target="#bio<?php echo $counter; ?>" aria-expanded="false" aria-controls="collapseExample">
											<div class="row">
												<div class="col-lg-6">
													<div class="photo" style="background-image: url('<?php the_sub_field("bio_photo"); ?>');"></div>
												</div>
												<div class="col-lg-6">
													<div class="accordion-title">
														<h2><?php the_sub_field("bio_name"); ?></h2>
														<p><?php the_sub_field("bio_title"); ?></p>
														<i class="fas fa-angle-right"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-content collapse" id="bio<?php echo $counter; ?>">
										<?php the_sub_field("bio_text"); ?>
										</div>
									</li>
								<?php $counter++; ?>
								<?php endwhile; ?>	
							</ul>	
						<?php endif; ?>


						<?php get_template_part( 'template-parts/content', 'accordion' ); ?>	
					</article>
				</div>
			</div>
		</div>
	</main>

	<?php get_template_part( 'template-parts/content', 'related-cta' ); ?>	

	<?php get_template_part( 'template-parts/content', 'bottom-banner-cta' ); ?>	


<?php endwhile; endif; ?>

<?php get_footer(); ?>

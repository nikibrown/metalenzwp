<?php
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
	<section class="page-header-img" style="background-image: url('<?php the_field("page_header_image"); ?>);">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<h1><?php the_title(); ?></h1>
				</div>	
			</div>
			
		</div>
	</section>

	

	<main>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav aria-label="breadcrumb">
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
							<!-- <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Library</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol> -->
						</nav>
					</div>
				</div>

				<div class="row no-gutters">
					<div class="col-lg-3 d-none d-lg-block">
						<aside class="sidebar-nav">
							<nav>
							<?php
								$children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' );
								if ( $children) : ?>
									<ul class="list-unstyled">
										<?php echo $children; ?>
									</ul>
								<?php endif; ?>
								<!-- <ul class="list-unstyled">
									<li>
										<a href="">Team</a>
									</li>
									<li class="has-sub-menu">
										<a href="">Careers</a>
										<ul class="list-unstyled sub-menu">
											<li>
												<a href="">Sample Secondary Menu Item
												</a>
											</li>
											<li>
												<a href="">Another Secondary Item
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="">Contact Us</a>
									</li>
								</ul> -->
							</nav>
							
						</aside>
					</div>
					<div class="col-lg-9">
						<article>
							<?php if( get_field('page_intro') ): ?>
								<p class="intro"><?php the_field("page_intro"); ?></p>
							<?php endif; ?>

							<?php the_content(); ?>

								
						</article>
						
	
					</div>
				</div>
						
						
				
			</div>
		</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

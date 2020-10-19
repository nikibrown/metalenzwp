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
					<aside class="sidebar-nav">
						<nav>
						<?php
							global $post;
							$parents = get_post_ancestors( $post->ID );
							/* Get the ID of the 'top most' Page if not return current page ID */
							$id = ($parents) ? $parents[count($parents)-1]: $post->ID;

							$childPages = wp_list_pages( 'title_li=&child_of='.$id.'&echo=0' );
							if ( $childPages) : ?>
								<ul class="list-unstyled">
									<?php echo $childPages; ?>
								</ul>
							<?php endif; ?>
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

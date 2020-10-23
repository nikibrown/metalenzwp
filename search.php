<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package m
 */

get_header();
?>



<?php if( get_field('page_header_image') ) { ?>
	<section class="page-header-img" style="background-image: url('<?php the_field("page_header_image"); ?>);">
<?php } else { ?>
	<section class="page-header-img" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/masthead.jpg);">
<?php } ?>
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-12">
				<h1><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'mwp' ), '<span><strong>' . get_search_query() . '</strong></span>' );
				?></h1>
			</div>	
		</div>
		
	</div>
</section>


<main class="page-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<article>
					
					<ul>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
								<?php the_excerpt(); ?>
							</li>
						<?php endwhile; ?>

						<?php else : ?>
							<p class="intro">
								<?php printf( esc_html__( 'No Results for: %s', 'mwp' ), '<span><strong>' . get_search_query() . '</strong></span>' );?>
							</p>
						
						
						<?php endif; ?>
					</ul>
				</article>
				
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>

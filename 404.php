<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
					<h1>
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mwp' ); ?>
					</h1>
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
							<p class="intro">
								The page you are looking for can not be found. You can try searching or return to the <a href="<?php bloginfo("url"); ?>">homepage</a>.
							</p>
						
					</article>
					
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>

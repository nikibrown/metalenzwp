<?php 
/**
 * The template for displaying news & Publications
 *
 * This is the template that displays all posts by default.
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


	<?php if( get_field('page_header_image') ) { ?>
		<section class="page-header-img" style="background-image: url('<?php the_field("page_header_image"); ?>);">
	<?php } else { ?>
		<section class="page-header-img" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/masthead.jpg);">
	<?php } ?>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<?php $title = get_post_field( 'post_title', 70 ); ?>
					<h1><?php echo $title; ?></h1>
				</div>	
			</div>
			
		</div>
	</section>


	<main class="page-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="<?php echo home_url(); ?>" itemprop="item">Home</a></li>
							<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">News and Publications</li>						
						</ol>
					</nav>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<article>
						<?php if( get_field('page_intro') ): ?>
							<p class="intro"><?php the_field("page_intro", 70); ?></p>
						<?php endif; ?>
						<ul class="list-unstyled news-events">
						
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
								<li class="row">
									<div class="col-lg-4">
										<?php if ( has_post_thumbnail() ) { ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>

										<?php } else { ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<img src="<?php bloginfo("template_directory")?>/assets/img/news.jpg" alt="<?php the_title_attribute(); ?>">
											</a>
										<?php } ?>
									</div>
									<div class="col-lg-8">
										<div class="news-inner">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
											<?php the_excerpt(); ?>
										</div>
									</div>
								</li>
						<?php endwhile; endif; ?>
						</ul>
					</article>
					
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>

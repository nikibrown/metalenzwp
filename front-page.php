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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<main>
		<section class="home-slider">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>Slider Content</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="home-cta">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="intro">
						Metalenz is commercializing a revolutionary flat optical technology and transforming optical sensing in consumer electronics and automotive markets. Built on a foundational innovation in meta-optics from Harvard University, Metalenz’s technology enables significant reduction in the complexity and size of optical modules while improving system performance. 
						</p>
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-lg-4">
						<h2>Mobile Devices</h2>
						<div class="photo-container">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, laboriosam sit laudantium quo beatae ratione! Rerum hic voluptas consequuntur ducimus commodi culpa.</p>

							<i class="fas fa-angle-right"></i>
						</div>
					</div>
					<div class="col-lg-4">
						<h2>AR/VR</h2>
						<div class="photo-container">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, laboriosam sit laudantium quo beatae ratione! Rerum hic voluptas consequuntur ducimus commodi culpa.</p>

							<i class="fas fa-angle-right"></i>
						</div>
					</div>
					<div class="col-lg-4">
						<h2>Automotive</h2>
						<div class="photo-container">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, laboriosam sit laudantium quo beatae ratione! Rerum hic voluptas consequuntur ducimus commodi culpa.</p>

							<i class="fas fa-angle-right"></i>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="news-events-homepage">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<h2>News & Events</h2>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li>
								
								<h3><a href="">News Item Title Lorem Ipsum Dolor Sit Amet</a></h3>
								<span class="date">August 11, 2020</span>
								<p>Lorem ipsum dolor sit amet lo lorem. Sit amet do sitlorem lorem lorem lorem!</p>
							</li>
							<li>
								<h3><a href="">Event Item Title Lorem Ipsum Dolor Sit Amet</a></h3>
								<span class="date">August 11, 2020</span>
								<p>Lorem ipsum dolor sit amet lo lorem. Sit amet do sitlorem lorem lorem lorem!</p>
							</li>
							<li>
								<h3><a href="">News Item Title Lorem Ipsum Dolor Sit Amet</a></h3>
								<span class="date">August 11, 2020</span>
								<p>Lorem ipsum dolor sit amet lo lorem. Sit amet do sitlorem lorem lorem lorem!</p>
							</li>
						</ul>
						
					</div>
					<div class="col-lg-3">
						<a href="" class="btn btn-secondary">See All <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</main>
		
			


<?php endwhile; endif; ?>

<?php get_footer(); ?>

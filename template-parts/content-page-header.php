<?php
/**
 * Template part for displaying page header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

?>

<?php if( get_field('page_header_image') ) { ?>
	<section class="page-header-img" style="background-image: url('<?php the_field("page_header_image"); ?>);">
<?php } else { ?>
	<section class="page-header-img" style="background-image: url('<?php bloginfo("template_directory")?>/assets/img/masthead.jpg);">
<?php } ?>
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
			</div>	
		</div>
		
	</div>
</section>

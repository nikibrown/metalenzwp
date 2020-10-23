<?php
/**
 * Template part for displaying accordion
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m
 */

?>

<?php $accordioncounter = 1; ?>
<?php if( have_rows('accordion_item') ): ?>
	<ul class="accordion list-unstyled">
		<?php while( have_rows('accordion_item') ): the_row(); ?>
			<li>
				<div class="accordion-button" data-toggle="collapse" data-target="#accordion-<?php echo $accordioncounter; ?>" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-angle-right"></i> <?php the_sub_field("accordion_title"); ?>
				</div>
				<div class="accordion-content collapse" id="accordion-<?php echo $accordioncounter; ?>">
					<?php the_sub_field("accordion_content"); ?>
				</div>
			</li>
		<?php $accordioncounter++; ?>
		<?php endwhile; ?>	
	</ul>	
<?php endif; ?>

<?php 
    /*
    *   @package Dynamo
	*/
?>
<?php
	$my_query = new WP_Query('post_type=machine&nopaging=1');
	if ($my_query->have_posts()) {
		$counter = 1;
		while ($my_query->have_posts()) {
			$my_query->the_post();
?>
    <div class="col-12 col-md-6 mb-5">
		<div class="machineBlock">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>">
				<h3 class="text-center mt-4"><?php the_title(); ?></h3>
				<?php if(has_post_thumbnail()) : ?>
				<div class="machineImg text-center">
					<div class="image-bg-behavior mt-3" ><?php the_post_thumbnail(); ?></div>
				</div>
			<?php endif; ?>
			</a>
		</div>
	</div>
<?php
			$counter++;
		}
	wp_reset_postdata();
	}
?>
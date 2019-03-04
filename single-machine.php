<?php
    /*
    *   Template name: Single Machine
    *
    *   @package Dynamo
    */
    get_header();
?>
    <article class="container single-tool mt-5 mb-5">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <?php 
                    while(have_posts()) : the_post();

				    get_template_part('content', 'machine');

				    endwhile; 
			    ?>
            </div>
        </div>
        <div class="row">
			<div class="col-12 text-center text-lg-left">
				<h2 class="mt-5">Gerelateerde machinepark</h2>
				<?php
					$count = 0;
					$related_posts = get_posts(
						[
							'post_type' => 'machine',
							'exclude' => get_the_ID(),
							'posts_per_page' => 2,
							'order' => 'ASC'
						]
					);
				?>
				<div class="row justify-content-center">
					<?php foreach ($related_posts AS $post) : ?>
					<div class="col-12 col-md-8 col-lg-5 mr-lg-auto">
                        <div class="machineBlock">
                            <a href="<?= get_the_permalink($post->ID) ?>">
                                <h3 class="text-center mt-4"><?php the_title(); ?></h3>
                                <div class="machineImg text-center">
                                    <div class="background-img image-bg-behavior" style="background-image:url('<?= get_the_post_thumbnail_url($post->ID) ?>')"></div>
                                </div>
                            </a>
                        </div>
					</div>
					<?php
						++$count;
						endforeach;
					?>
				</div>
			</div>
		</div>
	</article>
<?php
    get_footer();
?>
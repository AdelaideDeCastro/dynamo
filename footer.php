<?php 
	/* This is the template for the footer */

	$i = 0;
	$output = "";
	$footerTitle = get_post_meta(get_the_ID(), 'wpcf-footer-title', false);
	$array = array_values($footerTitle);
?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-md-4">
								<h3><?php echo $array[0]; ?></h3>
								<?php
									$how_many_last_posts = 6;
									$my_query = new WP_Query('post_type=machine&nopaging=1');
									if ($my_query->have_posts()) {
										echo "<ul>";
										$counter = 1;
										while ($my_query->have_posts() && $counter <= $how_many_last_posts) {
											$my_query->the_post();
										?>
											<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
											<?php
											$counter++;
										}
										echo "</ul>";
										wp_reset_postdata();
									}
								?>
							</div>
							<div class="col-12 col-md-4">
								<h3 class="mt-4 mt-md-0"><?php echo $array[1]; ?></h3>
								<?php
										$contacts = get_post_meta(get_the_ID(), 'wpcf-contact-info', false);
										foreach($contacts as $value) :
									?>
										<p><?= $value; ?></p>
										<?php endforeach; ?>
							</div>
							<div class="col-12 col-md-4">
								<h3 class="mt-4 mt-md-0"><?php echo $array[2]; ?></h3>
								<p><?= get_post_meta(get_the_ID(), 'wpcf-address', true); ?></p>
							</div>
						</div>
					</div>
					<div class="col-12 text-center mt-5">
						<p><i class="fa fa-copyright"></i> <?= get_post_meta(get_the_ID(), 'wpcf-copyright-content', true); ?></p>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/public/js/main.js"></script>
	</body>
</html>
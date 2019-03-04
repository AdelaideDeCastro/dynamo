<?php
	get_header();
	get_header('body');

	global $post;
?>
	<article class="home">
		<section class="">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
						<h1 class="text-uppercase"><?= get_post_meta(get_the_ID(), 'wpcf-description-title', true); ?></h1>
						<p><?= get_post_meta(get_the_ID(), 'wpcf-description-content', true); ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="p-0">
			<div class="container-fluid backgroundImg" style="background-image:url('<?= get_post_meta(get_the_ID(), 'wpcf-block-img-body', true); ?>')"></div>
		</section>
		<section class="bgGrey">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="text-uppercase"><?= get_post_meta(get_the_ID(), 'wpcf-chart-title', true); ?></h1>
					</div>	
					<div class="col-12 text-center charts_container">
						<div class="charts">
							<div class="chart_bar">
								<span></span>
							</div>
							<div class="chart_bar">
								<span></span>
							</div>
							<div class="chart_bar">
								<span></span>
							</div>
						</div>
						<div class="charts chart_description">
							<?php
								$years = get_post_meta(get_the_ID(), 'wpcf-chart-description', false);
								foreach($years as $value) :
							?>
								<div class="chart_bar">
									<p><?= $value; ?></p>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
			<section class="">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="text-uppercase"><?= get_post_meta(get_the_ID(), 'wpcf-block-img-title', true); ?></h1>
					</div>
					<div class="col-12">
						<div class="row">
							<?php
								$i = 0;
								$clientsImage = get_post_meta(get_the_ID(), 'wpcf-single-image-block', false);
								$clientIndustry = get_post_meta(get_the_ID(), 'wpcf-single-image-description', false);
								foreach($clientIndustry as $value) :
							?>
								<div class="col-12 col-md-4 col-lg-3 text-center align-self-end">
									<div class="company-info">
										<div class="imgBlock mt-5">	
											<div style="background-image:url('<?= $clientsImage[$i]; ?>')" alt="" class="img-fluid image-bg-behavior"></div>
										</div>
										<div class="descriptionBlock mt-4">
											<p><?= $value; ?></p>
										</div>
									</div>
								</div>
							<?php 
									$i++;
								endforeach; 
							?>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
						<p class="mt-5"><?= get_post_meta(get_the_ID(), 'wpcf-block-body-description', true); ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="bgGrey ecology">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 text-center align-self-center">
						<h1 class="text-uppercase"><?= get_post_meta(get_the_ID(), 'wpcf-block-image-description-title', true); ?></h1>
						<p><?= get_post_meta(get_the_ID(), 'wpcf-image-description', true); ?></p>
					</div>
					<div class="col-12 col-md-6 align-self-center">
						<div style="background-image:url('<?= get_post_meta(get_the_ID(), 'wpcf-block-show-image', true); ?>')" alt="Green world" class="img-fluid image-bg-behavior"></div>
					</div>
				</div>
			</div>
		</section>
	</article>
<?php
	get_footer();
?>
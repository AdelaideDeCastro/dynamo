<?php
	/* 
	* Template Name: Bedrijfsprofiel Page 
	*/
?>
<?php
	require('header.php');
?>
<article class=" home company">
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
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="text-uppercase"><?= get_post_meta(get_the_ID(), 'wpcf-block-img-title', true); ?></h1>
				</div>
				<div class="col-12">
				<div class="row">
					<?php 
						$i = 0;
						$serviceImg = get_post_meta(get_the_ID(), 'wpcf-single-image-block', false);
						$serviceInfo = get_post_meta(get_the_ID(), 'wpcf-single-image-description', false);
						foreach($serviceInfo as $value) :
					?>
						<div class="col-12 col-md-4 col-lg-3 text-center align-self-end">
							<div class="company-info">
								<div class="imgBlock mt-5">
									<div style="background-image:url('<?= $serviceImg[$i]; ?>')" alt="" class="img-fluid image-bg-behavior"></div>
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
	require('footer.php');
?>
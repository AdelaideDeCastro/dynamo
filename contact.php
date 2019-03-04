<?php 
	/* 
	* Template Name: Contact page 
	*/ 
?>
<?php
	require('header.php');
?>
	<article class="contact">
		<section class="contactMap p-0">
			<div class="container-fluid header-map p-0">
				<div id="map" style="height: 28.75rem;"></div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="mb-5"><?= get_post_meta(get_the_ID(), 'wpcf-contact-description', true); ?></p>
					</div>
					<div class="col-12 col-md-4">
						<p><?= get_post_meta(get_the_ID(), 'wpcf-address', true); ?></p>
					</div>
					<div class="col-12 col-md-4">
						<?php
							$contacts = get_post_meta(get_the_ID(), 'wpcf-contact-info', false);
							foreach($contacts as $value) :
						?>
							<p><?= $value; ?></p>
						<?php endforeach; ?>
					</div>
					<div class="col-12 col-md-4">
						<?php
							$commercials = get_post_meta(get_the_ID(), 'wpcf-commercial-info', false);
							foreach($commercials as $value) :
						?>
							<p><?= $value; ?></p>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	</article>
	<script>
	function initMap() {
		var options = {lat: 51.98768889999999, lng: 4.373202399999968};
			var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: options
			});
			var marker = new google.maps.Marker({
			position: options,
			map: map
			});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuI0Ma0F6DrlGkM7r_EUMKC6QkRDrEAo&callback=initMap">
    </script>
<?php
	require('footer.php');
?>
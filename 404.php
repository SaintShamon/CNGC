<?php
get_header();
?>


	<section class="error-404 error__page not-found content-block">
		<div class="container">
			<div class="error__page__content">
				<h1 class="error__page__title">
					404
				</h1>
				<div class="error__page__subtitle">Ooops!!!</div>
				<div class="error__page__text">That page doesn't exist or is unavailable</div>
				<div class="error__page__button"><a href="<?php echo get_home_url() ?>" class="button button--secondary">Go back to home</a></div>
			</div>
		</div>
	</section><!-- .error-404 -->

<?php
get_footer();

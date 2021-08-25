<?php get_header(); ?>
<section class="py-5" title="">
	<span role="img" aria-label="COVID-19"></span>
	<!-- covid-hero-final.jpg -->
	<div class="container">
		<div class="row inner-xs">
			<div>
				<h1><?php the_title() ?></h1>
			</div>
		</div>
	</div>
</section>
<section class=" content-area">
	<div class="container">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;

		?>
	</div>
</section>
<?php get_footer(); ?>
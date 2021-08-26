<?php get_header(); ?>
<section class="content-area">
	<div class="container-fluid">
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
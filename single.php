<?php get_header(); ?>

<section class="row">
	<div class="small-12 medium-8 large-8 columns main-body">
		<div class="main-content">
			<?php get_template_part('content', 'latest_post'); ?>
			<?php comments_template(); ?>
	</div>
</div>
	
	<div class="small-12 medium-4 large-4 columns sidebar">
		<?php get_template_part('content', 'sidebar'); ?>
	</div>

	
</section>

<?php get_footer(); ?>
<?php get_header(); ?>
<section class="row">
	<div class="small-12 medium-8 large-8 columns main-body">
		<div class="main-content">
			<article class="latest-posts">
				<div class="row">
				<h1>Category: <?php single_cat_title(); ?></h1>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part('content', 'post'); ?>
			
	<?php endwhile; else: ?>
				</div>
			<p>There are no posts or pages here</p>
	<?php endif; ?>					
			</article>	
					
					
	</div>
</div>
	
	<div class="small-12 medium-4 large-4 columns sidebar">
		<?php get_template_part('content', 'sidebar'); ?>
	</div>

	
</section>

<?php get_footer(); ?>


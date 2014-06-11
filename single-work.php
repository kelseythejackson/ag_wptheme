<?php get_header(); ?>

<section class="row">
	<div class="small-12 medium-8 large-8 columns main-body">
		<div class="main-content">
			<?php get_template_part('content', 'latest_work'); ?>
			<?php comments_template(); ?>
	</div>
</div>
	
	<div class="small-12 medium-4 large-4 columns sidebar">
		<?php get_template_part('content', 'sidebar'); ?>
	</div>

	
</section>

<?php get_footer(); ?>
<!-- 
<?php get_header(); ?>

<p>This is the single-work.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_field( 'work-content'); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>

<?php get_footer(); ?> -->
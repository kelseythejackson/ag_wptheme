<?php

/* 

	Template Name: Work Page


*/


 get_header(); 
?>
<section class="row">
	<div class="small-12 medium-8 large-8 columns main-body">
		<div class="main-content">
			<?php 
				$args = array(
					'post_type' => 'work'
				);
				$the_query = new WP_QUERY( $args );
			?>
			<article class="latest-work">
				<div class="row">
				<h1>Latest Work</h1>
				
				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<?php get_template_part('content', 'work'); ?>
				
				<?php endwhile; else: ?>
			</article>
			<p>There are no posts or pages here</p>
<?php endif; ?>
</div>
</div>
</div>
	
	<div class="small-12 medium-4 large-4 columns sidebar">
		<?php get_template_part('content', 'sidebar'); ?>
	</div>
</section>

<?php get_footer(); ?>
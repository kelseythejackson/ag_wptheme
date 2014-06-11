
<?php get_header(); ?>
<section class="row">
			<div class="small-12 medium-8 large-8 columns main-body">
			<div class="main-content">
				<article class="latest-work">
					<div class="row">
					<h1>Latest Work</h1>
					
					<?php 
	$args = array(
			'post_type' => 'work',
			'posts_per_page' => 2
		);

	$the_query = new WP_QUERY( $args );
?>
<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php get_template_part('content', 'work'); ?>
					<?php endwhile; endif; ?>
				</div>
				</article>
				<article class="latest-work">
					<div class="row">
					<h1>Latest Posts</h1>
					
					<?php 
	$args = array(
			'post_type' => 'post',
			'posts_per_page' => 2
		);

	$the_query = new WP_QUERY( $args );
?>
<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php get_template_part('content', 'post'); ?>
					<?php endwhile; endif; ?>
				</div>
				</article>
				</div>
			</div>
			<div class="small-12 medium-4 large-4 columns sidebar">
				<?php get_template_part('content', 'sidebar'); ?>
			</div>
		</section>

<?php get_footer(); ?>
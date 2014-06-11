<article class="latest-post">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
		
		
		<h2 class="single-post"><?php the_title(); ?></h2>
					
					<div class="row">
						<article class="small-12 large-12 columns">
							
						<p><?php the_content(); ?></p>
						<p class="author">posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in: <?php the_category(); ?>
					</p>
						

						</article>
						
					</div>
					<hr>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>
</article>
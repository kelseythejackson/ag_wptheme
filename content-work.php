
	<article class="small-12 large-6 columns">
		<a href="<?php the_permalink(); ?>" class="overlay">
			<div class="work-test crop-height">
				<div class="work-words">
					<h2>
						<?php the_title(); ?>
					</h2>
				</div>
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="scale">	
			</div>
		</a>
	</article>

<footer class="row">
			<div class="small-12 large-12 columns footer-help">
				<div class="row">
						<section class="small-12 medium-6 large-4 columns footer-widget-1">
							<?php if(dynamic_sidebar( 'footer_left' )): ?> 
							<?php else: ?>
							<p>Install a plugin here.</p>
							<?php endif; ?>
						</section>
						<section class=" small-12 medium-6 large-4 columns footer-widget-2">
							<?php if(dynamic_sidebar( 'footer_middle' )): ?> 
							<?php else: ?>
							<p>Install a plugin here.</p>
							<?php endif; ?>
						</section>
						<section class="small-12 medium-12 large-4 columns footer-widget-3">
							<?php if(dynamic_sidebar( 'footer_right' )): ?> 
							<?php else: ?>
							<p>Install a plugin here.</p>
							<?php endif; ?>
						</section>
						</div>
			</div>					
			<div class="small-12 large-12 columns legal">&copy; <?php echo date( 'Y'); ?> <a href="<?php echo site_url(); ?>">Artful Giant</a></div>
		</footer>
<?php wp_footer(); ?>	
</body>
</html>
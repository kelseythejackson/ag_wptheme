<!DOCTYPE html>
<html>
	<head>
		<title>	
			<?php
				wp_title( '-', true, 'right' );
				bloginfo( 'name' );
			?>
			|
			<?php
				bloginfo( 'description' );
			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">

		<header class="row">
			<div class="small-12 large-12 columns logo">
				<a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ag-header-logo.png"></a>
			</div>
			<nav class="small-12 large-12 columns main-nav">
				<?php 

			$args = array(
				'menu' => 'main-menu'
				);

			wp_nav_menu($args);

		?>
				<!-- <ul>
					<li><a href="work.html">Work</a></li>
					<li><a href="blog.html">Blog</a></li>
				</ul> -->
			</nav>
		</header>
	</div>
		<section class="attention">
			<div class="small-12 large-12 columns">
			<?php if(dynamic_sidebar( 'attention' )): ?> 
							<?php else: ?>
							
							<?php endif; ?>
			</div>
		</section>
		<div class="lower-bg">
		<div id="wrapper" class="low">
		

		
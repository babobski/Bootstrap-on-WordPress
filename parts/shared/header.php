<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="primaryNav">
			<?php
			wp_nav_menu( array(
				'menu'          	=> 'primary',
				'theme_location'	=> 'primary',
				'depth'         	=> 2,
				'container'			=> false,
				'menu_class'    	=> 'navbar-nav me-auto',
				'fallback_cb'   	=> '__return_false',
				'walker'         	=> new bootstrap_5_wp_nav_menu_walker())

			);
			?>
			<?php get_search_form(); ?>
		</div>
	</div>
</nav>

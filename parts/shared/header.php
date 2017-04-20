<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
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
			'menu_class'    	=> 'navbar-nav mr-auto',
			'fallback_cb'   	=> 'bs4navwalker::fallback',
			'walker'         	=> new bs4navwalker())
		
		);
		?>
		<?php get_search_form(); ?>
	</div>
</nav>

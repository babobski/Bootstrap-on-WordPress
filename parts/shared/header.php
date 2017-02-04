<nav class="navbar navbar-light bg-faded">
	<div class="collapse d-flex justify-content-end navbar-toggleable-sm">
		<?php
		wp_nav_menu( array(
			'menu'          	=> 'primary',
			'theme_location'	=> 'primary',
			'depth'         	=> 2,
			'container'			=> false,
			'menu_class'    	=> 'nav navbar-nav mr-auto',
			'fallback_cb'   	=> 'bs4navwalker::fallback',
			'walker'         	=> new bs4navwalker())
		
		);
		?>
		<?php get_search_form(); ?>
	</div>
</nav>

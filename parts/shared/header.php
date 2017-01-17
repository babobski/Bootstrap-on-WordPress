<nav class="navbar navbar-light bg-faded">
	<?php
	wp_nav_menu( array(
		'menu'            => 'primary',
		'theme_location'  => 'primary',
		'depth'           => 2,
		'container_class' => 'collapse navbar-toggleable-sm',
		'menu_class'      => 'nav navbar-nav',
		'fallback_cb'     => 'bs4navwalker::fallback',
		'walker'         	=> new bs4navwalker())
	
	);
	?>
	<?php get_search_form(); ?>
</nav>

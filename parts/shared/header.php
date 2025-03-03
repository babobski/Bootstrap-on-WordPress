<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="offcanvas offcanvas-start" tabindex="-1" id="primaryNav" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Bootstrap <small>on</small> WordPress</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<a class="navbar-brand d-none d-lg-inline-flex" href="<?php echo get_site_url(); ?>/">
					Bootstrap <small>on</small> WordPress
				</a>
				<?php
				wp_nav_menu( [
					'menu'          	=> 'primary',
					'theme_location'	=> 'primary',
					'depth'         	=> 2,
					'container'			=> false,
					'menu_class'    	=> 'navbar-nav justify-content-start flex-grow-1 pe-3',
					'fallback_cb'   	=> '__return_false',
					'walker'         	=> new bootstrap_5_wp_nav_menu_walker()
				] );
				?>
				<?php get_search_form(); ?>
			</div>
		</div>

		<div class="dropdown ms-3">
			<button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
				<span class="theme-icon-active"><i class="bi bi-sun-fill"></i></span>
				<span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
			</button>
			<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
				<li>
					<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
						<i class="bi bi-sun-fill me-2 opacity-50"></i>
						Light
					</button>
				</li>
				<li>
					<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
						<i class="bi bi-moon-stars-fill me-2 opacity-50"></i>
						Dark
					</button>
				</li>
				<li>
					<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
						<i class="bi bi-circle-half me-2 opacity-50"></i>
						Auto
					</button>
				</li>
			</ul>
		</div>
	</div>
</nav>

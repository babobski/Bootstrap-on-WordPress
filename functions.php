<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
	 * @package 	WordPress
	 * @subpackage 	Bootstrap 4.0.0
	 * @autor 		Babobski
	 */
	
	
	/* ========================================================================================================================
	
	Add language support to theme
	
	======================================================================================================================== */
	add_action('after_setup_theme', 'my_theme_setup');
	function my_theme_setup(){
		load_theme_textdomain('wp_babobski', get_template_directory() . '/language');
	}
	


	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/bootstrap-utilities.php' );
	require_once( 'external/bs4navwalker.php' );
	
	/* ========================================================================================================================
	
	Add html 5 support to wordpress elements
	
	======================================================================================================================== */
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'bootstrap_script_init' );

	add_filter( 'body_class', array( 'BsWp', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonomies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function bootstrap_script_init() {
		
		wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true);
		wp_enqueue_script('bootstrap');
		
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery', 'bootstrap' ), '0.0.1', true );
		wp_enqueue_script( 'site' );

		wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', '', '3.3.7', 'all' );
		wp_enqueue_style( 'bootstrap' );
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', array(), 'screen' );
		wp_enqueue_style( 'screen' );
	}
	
	/* ========================================================================================================================
	
	Security & cleanup wp admin
	
	======================================================================================================================== */
	
	//remove wp version
	function theme_remove_version() {
	return '';
	}
	
	add_filter('the_generator', 'theme_remove_version');
	
	//remove default footer text
	function remove_footer_admin () {
		echo "";
	}
	 
	add_filter('admin_footer_text', 'remove_footer_admin');
	
	//remove wordpress logo from adminbar
	function wp_logo_admin_bar_remove() {
		global $wp_admin_bar;

		/* Remove their stuff */
		$wp_admin_bar->remove_menu('wp-logo');
	}
	
	add_action('wp_before_admin_bar_render', 'wp_logo_admin_bar_remove', 0);
	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function bootstrap_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li class="media">
			<div class="media-left">
				<?php echo get_avatar( $comment ); ?>
			</div>
			<div class="media-body">
				<h4 class="media-heading"><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</div>
		<?php endif;
	}


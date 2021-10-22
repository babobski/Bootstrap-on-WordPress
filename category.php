<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/bootstrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 5.1.3
 * @autor 		Babobski
 */
$BsWp = new BsWp;

$BsWp->get_template_parts([
	'parts/shared/html-header', 
	'parts/shared/header'
]);
?>

<?php if ( have_posts() ): ?>
	<h1>
		<?php echo __('Category Archive:', 'wp_babobski'); ?> <?php echo single_cat_title( '', false ); ?>
	</h1>
	<ul class="list-unstyled">
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<h2>
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
				<?php the_date(); ?> <?php the_time(); ?>
			</time>
			<?php comments_popup_link(__('Leave a Comment', 'wp_babobski'), __('1 Comment', 'wp_babobski'), __('% Comments', 'wp_babobski')); ?>
			<?php the_content(); ?>
		</li>
		<?php endwhile; ?>
	</ul>
<?php else: ?>
	<h1>
		<?php echo __('No posts to display in', 'wp_babobski'); ?> <?php echo single_cat_title( '', false ); ?>
	</h1>
<?php endif; ?>

<?php 
$BsWp->get_template_parts([
	'parts/shared/footer',
	'parts/shared/html-footer'
]);
?>
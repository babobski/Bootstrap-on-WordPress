<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/bootstrap-utilities.php  for info on BsWp::get_template_parts()
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
	<h2>
		<?php echo __('Tag Archive:', 'wp_babobski'); ?> <?php echo single_tag_title( '', false ); ?>
	</h2>
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<h2>
					<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
				<?php the_content(); ?>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
<?php else: ?>
	<h2>
		<?php echo __('No posts to display in', 'wp_babobski'); ?> <?php echo single_tag_title( '', false ); ?>
	</h2>
<?php endif; ?>

<?php 
$BsWp->get_template_parts([
	'parts/shared/footer',
	'parts/shared/html-footer'
]);
?>
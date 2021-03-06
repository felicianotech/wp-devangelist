<?php
/**
 * Template part for displaying single posts.
 *
 * This is used when posts are displayed in a list. For example, the main blog
 * page.
 *
 * @package wp-devangelist
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if( "post" == get_post_type()): ?>
			<div class="entry-meta"><?php wp_devangelist_posted_on(); ?></div>
		<?php endif; ?>
		<?php if( has_post_thumbnail()): ?>
			<div class="wp-post-image-wrapper">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

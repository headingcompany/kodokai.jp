<?php
/**
 * @package CoursePress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php coursepress_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php

	if ( has_post_thumbnail() ) {
		echo '<div class="featured-image">';
		the_post_thumbnail();
		echo '</div>';
	}

	?>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'coursepress' ),
				'after' => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php

		// translators: Used between list items, there is a space after the comma.
		$category_list = get_the_category_list( __( ', ', 'coursepress' ) );

		// translators: Used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', __( ', ', 'coursepress' ) );

		if ( ! coursepress_categorized_blog() ) {
			// This blog only has 1 category so we just need to worry about tags in the meta text
			if ( $tag_list ) {
				$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'coursepress' );
			} else {
				$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'coursepress' );
			}
		} else {
			// But this blog has loads of categories so we should probably display them here
			if ( $tag_list ) {
				$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'coursepress' );
			} else {
				$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'coursepress' );
			}
		} // end check for categories on this blog

		printf(
			$meta_text,
			$category_list,
			$tag_list,
			get_permalink()
		);

		edit_post_link(
			__( 'Edit', 'coursepress' ),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
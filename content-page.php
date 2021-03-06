<?php
/**
 * The template used for displaying page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php Bourboneat\post_thumbnail(); ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );	?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 
			the_content();
		
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'bourboneat' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_attr__( 'Page', 'bourboneat' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( esc_attr__( 'Edit', 'bourboneat' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->

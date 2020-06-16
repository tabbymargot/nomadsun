<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
			
			// 1. if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

				<!-- Header is separated into its own component file -->
				<?php get_template_part( 'template-parts/content-header' ); ?>
				
			<!-- 2. if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>

				<!-- Header is separated into its own component file -->
				<?php get_template_part( 'template-parts/content-text' ); ?>

			<!-- 3.  -->
			<?php elseif( get_row_layout() == 'gallery' ): ?>
				<!-- Gallery is in its own component file -->
				<?php get_template_part( 'template-parts/content-gallery' ); ?>
			<?php endif; 
			endwhile; endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- social link component -->
		<?php get_template_part( 'template-parts/content-share' ); ?>

		<!-- Explore is in its own component file -->
		<?php get_template_part( 'template-parts/content-explore' ); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

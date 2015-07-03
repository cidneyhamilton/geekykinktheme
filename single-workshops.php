<?php
/**
 * Template for displaying all single posts
 */

get_header(); ?>

	
		<section id="primary">
			<div id="content" role="main">			

<header class="page-header">
  <h1 class="page-title">Workshops</h1>

  <div class="workshop-filters">
  	<?php echo jme_workshop_dropdown(); ?>
  </div>
 
</header>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content-attraction', get_post_format() ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<?php
/**
 * Category template
 */

get_header(); 

?>
    <section id="primary">
      <div id="content" role="main">

      <?php get_template_part('_partials/pageheader', 'blog'); ?>

      <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>       	 	
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php get_template_part('_partials/pageheader', 'post'); ?>

    <div class="entry-content">

        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'jme-event-base-theme' ) ); ?>

      </div><!-- .entry-content -->

      <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'jme-event-base-theme' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
    
    <?php endwhile; ?>

        <?php get_template_part('_partials/pagefooter'); ?>

      <?php else : ?>
      
        <?php get_template_part('_partials/404-content'); ?>

      <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

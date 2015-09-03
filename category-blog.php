<?php
/**
 * Category template
 */

get_header(); 

?>
    <section id="primary">
      <div id="content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">

          <h1 class="page-title">
            The GKE Blog
          </h1> 

        <section class="description">Welcome to the GKE blog!</section>

        </header>

          <?php while ( have_posts() ) : the_post(); ?>       	 	
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
              <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
              <h2>by <?php the_author_link(); ?></h2>
            </header><!-- .entry-header -->

    <div class="entry-content">

        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'jme-event-base-theme' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'jme-event-base-theme' ) . '</span>', 'after' => '</div>' ) ); ?>

      </div><!-- .entry-content -->

      <footer class="entry-meta">
        <?php if ( comments_open() ) : ?>
          <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'jme_event_base_theme' ), __( '<b>%</b> Replies', 'jme_event_base_theme' ) ); ?></span>
        <?php endif; // End if comments_open() ?>
        
        <?php edit_post_link( __( 'Edit', 'jme-event-base-theme' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
    
    <?php endwhile; ?>

        <footer class="content-footer">
          <div class="pagination-nav">
            <?php 
            echo paginate_links(array(
              'prev_next' => False,
            )); 
            ?>

          </div>
        </footer>

      <?php else : ?>
      
        <?php get_template_part('_partials/404-content'); ?>

      <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
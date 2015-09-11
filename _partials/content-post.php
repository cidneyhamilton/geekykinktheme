<?php
/**
 * Template for displaying content on posts
 *
 */
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part('_partials/pageheader', get_post_type()); ?>

    <div class="entry-content">

      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'jme-event-base-theme' ) ); ?>

      <?php if (is_single() && in_category('blog')): ?>
        <section class="bio">
          <?php 
            $author = get_the_author_meta();
          ?>
          <h1><?php the_author_posts_link(); ?></h1>

          <ul class="social">
            <?php if (!empty($author['user_url'])) : ?>
              <li><a href="<?php echo $author['user_url']; ?>" class="web" rel="me" target="_blank">Website</a></li>
            <?php endif; ?>
            <?php if (!empty($author['twitter']))  : ?>
              <li><a href="http://twitter.com/<?php echo $author['twitter']; ?>" class="tw" rel="me" target="_blank">Twitter</a></li>
            <?php endif; ?>
          </ul>
          <p>
            <?php echo get_the_author_meta('description'); ?>
          </p>
        </section>
      <?php endif; ?>

    </div><!-- .entry-content -->

    <footer class="entry-meta">
      
      <?php edit_post_link( __( 'Edit', 'jme-event-base-theme' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </article><!-- #post-<?php the_ID(); ?> -->


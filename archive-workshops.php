<?php
/**
 * Category template
 */

get_header(); 

query_posts(array(
  'post_type' => 'workshops',
  'order' => 'ASC',
  'orderby' => 'title',
  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 )
  )
);
?>

    <section id="primary">
      <div id="content" role="main">

      <?php get_template_part('workshop-header',  get_post_format()); ?>

      <?php if ( have_posts() ) : ?>

          

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>       	 	
            <?php get_template_part( 'content-workshop', get_post_format() ); ?>
          <?php endwhile; ?>

          <?php /* Pagination */ ?>

        <footer class="content-footer">
        <div class="pagination-nav">
          <?php echo paginate_links(array(
            'prev_next'          => False,
          )); ?>
        </div>
        </footer>

        <?php else : ?>

          <?php include('404-content.php'); ?>

        <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

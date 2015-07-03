<?php
/**
 * Category template
 */

get_header(); ?>

    <section id="primary">
      <div id="content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title">Workshops</h1>
          
          <div class="attraction-filters">
            <label for="workshop-dropdown">
              Filter By Name: <?php echo jme_workshop_dropdown(); ?>
            </label>
          </div>

          <div class="pagination-nav">
            <?php echo paginate_links(array(
              'prev_next'          => False,
            )); ?>
          </div>  
        </header>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>       	 	
            <?php get_template_part( 'content', get_post_format() ); ?>
          <?php endwhile; ?>

          <?php /* Pagination */ ?>

        <div class="pagination-nav">
          <?php echo paginate_links(array(
            'prev_next'          => False,
          )); ?>
        </div>

        <?php else : ?>

          <?php include('404-content.php'); ?>

        <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

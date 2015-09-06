<header class="page-header">

  <h1 class="page-title">
    The GKE Blog
  </h1> 

  <?php if (!is_single()): ?>
  <section class="description">
    <p>
    <b>Geek</b> and <b>kink</b> intersect in innumerable glorious ways.  Most of the people who are a part of this event love to read, and many of us tend to think - a lot - and sometimes we <b>write about it</b>.
    </p>
    <p>
    This <b>blog</b> is a space for thoughts on geekery, kink, permutations of the two, philosophies, ideas, and sometimes eclectic ramblings.
    </p>
  </section>
  <?php endif; ?>

  <div class="pagination-nav">
    <?php echo paginate_links(array(
    'prev_next'          => False,
    )); ?>
  </div>  

</header>
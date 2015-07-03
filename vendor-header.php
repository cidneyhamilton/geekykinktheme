<?php
	$selected = 0;

	$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); 
	if ($term != null) {
		$selected = (int) $term->term_id;
	} 
	if (is_single()) {
		$selected = get_the_id();
	}
?>

<header class="page-header">
	<h1 class="page-title"><a href="/vendors">Vendors</a></h1>

	<div class="attraction-filters">
		<label for="vendor-dropdown">
		Filter By Name: <?php echo jme_vendor_dropdown($selected); ?>
		</label>
	</div>

	<?php if (!is_single()): ?>
	<div class="pagination-nav">
		<?php echo paginate_links(array(
		'prev_next'          => False,
		)); ?>
	</div>  
	<?php endif; ?>
</header>
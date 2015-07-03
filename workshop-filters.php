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

<div class="attraction-filters">
	<label for="workshop-dropdown">
	By Name: <?php echo jme_workshop_dropdown($selected); ?>
	</label>
	<label for="presenter-dropdown">
	  By Presenter: <?php echo jme_presenter_dropdown($selected); ?>
	</label>
</div>
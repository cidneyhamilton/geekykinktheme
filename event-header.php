
<header class="page-header">
	<h1 class="page-title">Games and Social Events</a></h1>
	<?php if (!is_single()): ?>
	<div class="pagination-nav">
		<?php echo paginate_links(array(
		'prev_next'          => False,
		)); ?>
	</div>  
	<?php endif; ?>
</header>
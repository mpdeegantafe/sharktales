<?php
/* Side Bar */
?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar" class="widget-area" >
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

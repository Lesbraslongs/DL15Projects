<?php

if (is_active_sidebar('ma-sidebar-personnalisee')) : ?>
	<aside id="sidebar" class="sidebar">
		<?php dynamic_sidebar('ma-sidebar-personnalisee' ); ?>
	</aside>
<?php endif; ?>
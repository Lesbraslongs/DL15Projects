<?php

get_header( ); ?>

<?php
	if (have_posts() ) :
		while (have_posts()) : the_post();
?>
		<h1 class="h1"><?php the_title(); ?></h1>
		<?php get_the_post_thumbnail(); ?>
		<div class="container_home_editor container_editor">
			<p><?php the_content(); get_footer();?></p>
		</div>
<?php
		endwhile;
	endif;

get_sidebar();
?>

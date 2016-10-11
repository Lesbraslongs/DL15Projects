<?php

get_header( ); ?>

<?php
	if (have_posts() ) :
		while (have_posts()) : the_post();
?>
		<h1 class="h1"><?php the_title(); ?></h1>
		<?php
			$attachement_id = get_post_thumbnail_id( get_the_id());
			$image_src = wp_get_attachment_image_src( $attachement_id, 'jumbotron');
		?>
		<img src="<?= $image_src[0]; ?>">
		<div class="container_editor">
			<p><?php the_content(); get_footer();?></p>
		</div>
<?php
		endwhile;
	endif;

get_sidebar();
?>

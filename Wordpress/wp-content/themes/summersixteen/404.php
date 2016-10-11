<?php get_header();

$oups = new WP_Query('page_id=15');

if($oups->have_posts()) : while ($oups->have_posts()) : $oups->the_post();

?>

<h1><?php the_title(); ?></h1>

<div class="container_editor">
	<?php the_content(); ?>
</div>

<?php endwhile; endif;

get_sidebar();
get_footer();

?>
<?php
/*Template Name: News*/
get_header();
query_posts(array(
   'post_type' => 'news'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<div>
    <?php the_content(); ?>
</div>
<p>fwfew</p>
<?php endwhile;
get_footer();
?>
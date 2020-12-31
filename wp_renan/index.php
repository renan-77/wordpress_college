<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<?php the_content(__('(more...)')); ?>
<?php the_date(); ?>
<a href="<?php get_the_author_link();?>"><?php the_author(); ?></a>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php
// Globalize the $post variable;
// probably already available in this context, but just in case...
global $post;
wp_list_pages( array(
    // Only pages that are children of the current page
    'child_of' => $post->ID,
    // Only show one level of hierarchy
    'depth' => 0
) );
?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_template_part('./footer'); ?>
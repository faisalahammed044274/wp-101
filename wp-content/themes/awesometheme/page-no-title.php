<?php
/*
* Template Name: Page no content
*/

get_header(); ?>
<?php
if (have_posts()):

    while (have_posts()):
        the_post(); ?>
        <hr>
        <h2>Static Page Title</h2>
        <small>Posted on : <?php the_time('F j, Y'); ?></small>&nbsp;
        <?php the_category(); ?></small>
        <br>
        <p><?php the_content(); ?></p>
        <hr>

<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>
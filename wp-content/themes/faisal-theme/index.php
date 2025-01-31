<?php get_header(); ?>



<!-- site-main -->
<div id="main" class="site-main">
    <div class="layout-medium">
        <div id="primary" class="content-area">









            <!-- site-content -->
            <div id="content" class="site-content" role="main"> <!-- .hentry -->
                <article class="hentry page">


                    <!-- .entry-content -->
                    <div class="entry-content intro" data-animation="rotate-1">



                        <!-- .profile-image -->
                        <div class="profile-image">
                            <img alt="profile" src="images/site/about-me-2.jpg" />
                        </div>
                        <!-- .profile-image -->


                        <h2><em>Hi.</em> I am Haley Duster</h2>
                        <h3>I am a <strong>blogger</strong> <strong>traveler</strong> <strong>writer</strong></h3>


                        <!-- .link-boxes -->
                        <figure>
                            <a href="about.html"><img src="images/site/box-01.jpg" alt="About Me"></a>
                            <figcaption class="wp-caption-text">About Me</figcaption>
                        </figure>

                        <figure>
                            <a href="about.html"><img src="images/site/box-02.jpg" alt="About Me"></a>
                            <figcaption class="wp-caption-text">Life</figcaption>
                        </figure>

                        <figure>
                            <a href="about.html"><img src="images/site/box-03.jpg" alt="About Me"></a>
                            <figcaption class="wp-caption-text">Travel</figcaption>
                        </figure>

                        <figure>
                            <a href="https://www.instagram.com/pixelwarsdesign/"><img src="images/site/box-04.jpg" alt="About Me"></a>
                            <figcaption class="wp-caption-text">Follow On Instagram</figcaption>
                        </figure>
                        <!-- .link-boxes -->


                    </div>
                    <!-- .entry-content -->



                </article>
                <!-- .page -->




                <!-- .home-title -->
                <h3 class="widget-title home-title">LATEST FROM THE BLOG</h3>


                <!-- BLOG SIMPLE -->
                <div class="blog-simple">
                <?php
                if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                    <?php get_template_part('content', get_post_format());?>

                    <!-- .hentry -->
                    <article class="hentry post has-post-thumbnail">

                        <!-- .hentry-left -->
                        <div class="hentry-left">
                            <div class="entry-date">
                                <span><?php //echo the_time('F, j, Y') ?></span>
                                <span class="day"><?php echo the_time('j') ?></span>
                                <span class="month"><?php echo the_time('F') ?></span>
                                <span class="year"><?php echo the_time('Y') ?></span>
                                 
                            </div>
                            <div class="featured-image" style="background-image:url(images/blog/06.jpg)"></div>
                        </div>
                        <!-- .hentry-left -->

                        <!-- .hentry-middle -->
                        <div class="hentry-middle">

                            <!-- .entry-title -->
                            <h2 class="entry-title"><a href="blog-single.html"><?php the_title(); ?></a></h2>

                        </div>
                        <!-- .hentry-middle -->

                        <a class="post-link" href="blog-single.html"><?php the_title(); ?></a>

                    </article>
                    <!-- .hentry -->
                    <?php 
                    endwhile; ?>
                    <?php
                    endif;
                    ?>


                </div>
                <!-- BLOG SIMPLE -->



                <!-- .home-launch -->
                <div class="home-launch">
                    <a class="button" href="blog-irregular.html">See All Posts</a>
                </div>
                <!-- .home-launch -->


            </div>
            <!-- site-content -->

        </div>
        <!-- primary -->





    </div>
    <!-- layout -->


</div>
<!-- site-main -->


<?php get_footer(); ?>
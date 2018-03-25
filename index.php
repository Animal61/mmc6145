<?php get_header(); ?>

<div class="wrapper">
    <h1>Hello world</h1>
    
    <!-- Begin Loop. -->
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                    <div class="posts">
                            <div class="background-post">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <h4><?php the_time('F j, Y'); ?></h4>
                            </div>
                            <?php 
                                if (has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                }
                            ?>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" id="more">Read More</a>
                        </div>
                    <?php 
                } //end while
            } //end if
        ?>
        <!-- End Loop -->
    </div>

<?php get_footer(); ?>
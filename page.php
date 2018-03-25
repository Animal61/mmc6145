<?php get_header(); ?>

<!-- Beginning of the Section -->
<section>

    <!-- Beginning of the wrapper -->
    <div class="wrapper">

        <!-- Begin loop -->
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();?>
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


                    <h2><?php the_title(); ?></h2>

                    <?php the_post_thumbnail('medium'); ?>
                    
                    <?php the_content(); ?>

                    <?php 
                } // end of the while loop
            } // end of if statement
        ?>
    </div> <!-- end of section -->
</section>

<?php get_footer(); ?>
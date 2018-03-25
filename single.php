<?php get_header(); ?>

<!-- Beginning of the Section -->
<section>

    <!-- Beginning o the wrapper -->
    <div class="wrapper">

        <!-- Begin loop -->
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();?>

                    <h2><?php the_title(); ?></h2>

                    <?php the_post_thumbnail('medium_large'); ?>

                    <?php the_content(); ?>
                    
                    <?php
                    if(is_single('59')) {
                      comments_template('/comments.php');
                    }else{
                      comments_template('/comments-custom.php');
                    }
                    ?>

                    <?php 
                } // end of the while loop
            } // end of if statement
        ?>
    </div> <!-- end of section -->
</section>

<?php get_footer(); ?>
<?php get_header(); ?>
<?php
        if (have_posts ()) {
            while (have_posts ()){
                the_post();
                echo"<h1>";the_title();echo"</h1>";
                the_content();
            }
        }
        ?>
<?php get_footer(); ?>
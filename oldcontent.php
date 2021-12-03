<?php
/**
 * Template Name: Old Content
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>
    <!-- <section class="site-header"></section> -->


    <!-- Body -->
    <section class="post-content py-5"> 
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>   
        </div>
    </section>
<?php get_footer(); ?>
   

  

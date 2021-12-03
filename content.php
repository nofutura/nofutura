<?php
/**
 * Template Name: Content
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
        <div class="container pt-5">
            <div class="row py-5">
                <div class="col-12 col-md-8 pb-5"> 
                    <div class="grid"> 		
                        <div class="grid-sizer"></div>
                        <div class="grid-item grid-item--width3">
                            <?php 
                                $main = get_field('main_image');
                                if( $main ) { ?>
                                    <img src="<?php echo esc_url($main['url']); ?>" alt="<?php echo esc_attr($main['alt']); ?>" />
                            <?php } else { echo get_the_post_thumbnail( get_the_ID(), 'large' ); }
                            //endif; ?>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <?php 
                                $img2 = get_field('image2');
                                if( $img2 ): ?>
                                    <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr($img2['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <?php 
                                $img4 = get_field('image4');
                                if( $img4 ): ?>
                                    <img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo esc_attr($img4['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <?php 
                                $img3 = get_field('image3');
                                if( !empty( $img3 ) ): ?>
                                    <img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo esc_attr($img3['alt']); ?>" />
                            <?php endif; ?>  
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <?php the_content(); ?>
                </div>
            </div>   
        </div>
    </section>
<?php get_footer(); ?>

   

  

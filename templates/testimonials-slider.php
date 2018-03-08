<div class="container">
    <?php 
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'testimonial', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>
    <div class="slider testimonials-slider">
        <div class="frame js_frame">
            <ul class="slides js_slides">
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li class="js_slide">
                        <div class="testimonial">
                            <div class="wrapper">
                                <div class="testimonial-image"><?php the_post_thumbnail(); ?></div>
                                <div class="testimonial-comment"><?php the_content(); ?></div>
                            </div>
                            <a>Read more</a>
                        </div>
                    </li>
                <?php endwhile; ?>
                <!-- end of the loop -->
            </ul>
        </div>
        <span class="js_prev prev">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/arrowLeft.svg">
        </span>
        <span class="js_next next">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/arrowRight.svg">
        </span>
    </div>
    <?php wp_reset_postdata(); ?>       
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
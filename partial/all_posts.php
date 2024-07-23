<div class="blogs-wrapper">
   <div class="container">
        <div class="custom-heading" data-aos="fade-up">
            <h2><?php the_sub_field('title');?></h2>
        </div>
        <div class="blog-cards blog-page">
            <?php 
            $args = array(
                'post_type' => 'post', // Change to your custom post type if necessary
                'posts_per_page' => 12, // Number of posts to show
            );

                // Custom query.
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) {

            // Start looping over the query results.
                while ($the_query->have_posts())  {

                    $the_query->the_post();
                    
                    // Output the title and content.
                    ?>
                        <div class="blog" data-aos="flip-left">
                            <div class="blog-image">
                                <a href="<?= get_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </a>
                            </div>
                            
                            <div class="blog-content">
                                <a href="<?= get_permalink(); ?>">
                                    <h3><?= get_the_title(); ?></h3>
                                    <p class="blog-date"><?= date_i18n('d/m/Y', strtotime(get_the_date('Y-m-d'))); ?></p>
                                    <p><?= wp_trim_words(get_post_field('post_content'), 15); ?></p>
                                </a>
                            </div>
                        </div>
                    <?php

                }

            }
            
        wp_reset_postdata();
        // Restore original post data. It resets the global $post object
        ?>


        </div>
        <?php if ($the_query->max_num_pages > 1) {
            echo '<div class="load-more"><button id="loadmore_blogs" class="load-more-btn">View more</button></div>'; 
        }
        ?>
    </div>
</div>



<script>
   
   jQuery(function($) {
    $('body').on('click', '#loadmore_blogs', function() {
        var button = $(this);
        var data = {
            'action': 'load_more_blogs',
            'query': myloadmore_params.posts,
            'page': myloadmore_params.current_page
        };

        $.ajax({
            url: myloadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Loading...'); // Change button text while loading
            },
            success: function(response) {
                if (response) {
                    $('.blog-cards.blog-page').append(response); // Append new posts
                    myloadmore_params.current_page++;

                    if (myloadmore_params.current_page == myloadmore_params.max_page) {
                        button.parent().hide(); // Hide the button if there are no more pages to load
                    } else {
                        button.text('View more'); // Restore button text if there are more pages
                    }
                } else {
                    button.parent().hide(); // Hide the button if no data is returned
                }
            },
            error: function(xhr, status, error) {
                console.error("An AJAX error occurred: " + status + '\nError: ' + error);
                button.text('View more'); // Restore button text in case of error
            }
        });
    });
});


</script>
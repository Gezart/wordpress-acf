<div class="projects-page-wrapper">
   <div class="container">
        <div class="custom-heading">
            <h2><?php the_sub_field('title');?></h2>
            <p><?php the_sub_field('content');?></p>
        </div>
        <div class="projects">
        <?php 
            $custom_post_type_args = array(
                'post_type'      => 'project',
                'posts_per_page' => 9,
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
            );

            // Custom query.
            $wp_query = new WP_Query($custom_post_type_args); ?>

                <?php if ($wp_query->have_posts()) {

                    // Start looping over the query results.
                    while ($wp_query->have_posts()) {

                        $wp_query->the_post();
                        
                        // Output the title and content.
                        ?>
                            <div class="project">
                                <div class="project-image">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                              
                                <div class="project-content">
                                    <h3><?= get_the_title(); ?></h3>
                                    <a href="<?= get_permalink(); ?>"><button>View more</button></a>
                                </div>
                            </div>
                        <?php

                    }

                       // Reset post data.
                wp_reset_postdata();
            } else {
                // If no posts are found.
                echo '<p>No projects found.</p>';
            }

        ?>

        <?php 
			if ($wp_query->max_num_pages > 1) {
            echo '<div class="load-more"><button id="loadmore_projects" class="load-more-btn">View more</button></div>'; 
        }
        ?>
        </div>

    </div>
</div>


<script>

jQuery(function($) {
    $('body').on('click', '#loadmore_projects', function() {
        var button = $(this);
		
        var data = {
            'action': 'loadmore',
            'query': myloadmore_params.posts,
            'page': myloadmore_params.current_page
        };

        $.ajax({
            url: myloadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Loading...');
            },
            success: function(data) {
                if (data) {
                    button.text('View more').closest('div').before(data); // Insert new posts before the button's container div
                    myloadmore_params.current_page++;

                    if (myloadmore_params.current_page == myloadmore_params.max_page) {
                        button.parent().hide(); // Hide the button's container div
                    }
                } else {
                    button.parent().hide(); // Hide the button's container div if no data is returned
                }
            },
            error: function(xhr, status, error) {
                console.error("An AJAX error occurred: " + status + '\nError: ' + error);
            }
        });
    });
});

</script>
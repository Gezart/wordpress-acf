<div class="container">
    <div class="related-projects">
        <?php 
            $title = get_sub_field('title');
        ?>
            <div class="custom-heading"  data-aos="fade-up">
                <h2><?= $title;?></h2>
            </div>
            <div class="swiper projects-slider"  data-aos="fade-up">
                <div class="swiper-wrapper">
                    <?php 
                    // Define custom query parameters
                    $custom_post_type_args = array(
                        'post_type'      => 'project', // Replace with your custom post type slug
                        'posts_per_page' => 5,
                        'order-by' => 'date',
                        'order' => 'DESC'
                    );

                    // Custom query.
                    $wp_query = new WP_Query($custom_post_type_args); ?>

                        <?php if ($wp_query->have_posts()) {

                            // Start looping over the query results.
                            while ($wp_query->have_posts()) {

                                $wp_query->the_post();
                                
                                // Output the title and content.
                                ?>
                                    <div class="project swiper-slide">
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

                        }

                        wp_reset_postdata();

                        ?>
                </div>
            </div>
            <div class="lb-pagination"></div>
    </div>
</div>


<script>
    var swiper = new Swiper(".projects-slider", {
      slidesPerView: 1,
      pagination: {
        el: ".lb-pagination",
        clickable: true,
      },
      breakpoints: {
        991: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1340: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
    });
</script>
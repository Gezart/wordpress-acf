<div class="container">
    <div class="lastest-blog">
        <?php 
            $title = get_sub_field('title');
        ?>
            <div class="custom-heading"  data-aos="fade-up">
                <h2><?= $title;?></h2>
            </div>
            <div class="lb-wrapper blog-cards"  data-aos="fade-up">
                <div class="swiper-wrapper">
                    <?php 
                    // Define custom query parameters
                    $custom_post_type_args = array(
                        'post_type'      => 'post', // Replace with your custom post type slug
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
                                    <div class="blog swiper-slide">
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

                        ?>
                </div>
            </div>
            <div class="lb-pagination"></div>
    </div>
</div>


<script>
    var swiper = new Swiper(".lb-wrapper", {
      slidesPerView: 1,
      spaceBetween: 40,
      pagination: {
        el: ".lb-pagination",
        clickable: true,
      },
      breakpoints: {
        1340: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
      },
    });
</script>
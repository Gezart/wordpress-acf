<?php 
    // Template Name: Project Page
    get_header();     
?>
<main id="primary" class="site-main">
    <div class="projects-page-wrapper">
        <div class="container">
            <div class="custom-heading">
                <h2>Latest Projects</h2>
                <p>TRANSFORM YOUR HOME WITH US</p>
            </div>
            <div class="projects">
            <?php 
                $custom_post_type_args = array(
                    'post_type'      => 'project',
                    'posts_per_page' => 9,
                    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
                );

                // Custom query.
                $custom_query = new WP_Query($custom_post_type_args);

                if ($custom_query->have_posts()) {
                    while ($custom_query->have_posts()) {
                        $custom_query->the_post();
                        ?>
                            <div class="project">
                                <div class="project-image">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
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
                if ($custom_query->max_num_pages > 1) {
                    echo '<div class="load-more"><button id="loadmore_projects" class="load-more-btn">View more</button></div>'; 
                }
            ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

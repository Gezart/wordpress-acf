<div class="home-blogs-wrapper">
    <div class="container">
        <?php 
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $button = get_sub_field('button'); 
        ?>
            <div class="custom-heading"  data-aos="fade-up">
                <h2><?= $title;?></h2>
                <p><?= $content; ?></p>
            </div>
        <div class="home-blogs blog-cards">
                <?php 
                    if( have_rows('blogs') ){
                        while ( have_rows('blogs') ) { 
                            the_row();
                        $service = get_sub_field('blog');
                ?>
                <div class="blog"  data-aos="fade-up">
                    <div class="blog-image">
                        <a>
                            <?php echo get_the_post_thumbnail($service->ID, 'thumbnail'); ?>
                        </a>
                    </div>
                    <div class="blog-content">
                    <!--  href="<?= get_permalink($service->ID); ?>" -->
                        <a>
                            <h3><?= get_the_title($service->ID); ?></h3>
                            <p class="blog-date"><?= date_i18n('d/m/Y', strtotime(get_the_date('Y-m-d', $service->ID))); ?></p>
                            <p><?= wp_trim_words(get_post_field('post_content', $service->ID), 15); ?></p>
                        </a>
                    </div>
                </div>
      
        <?php 
                } 
            }
        ?>
        </div>
        <div class="goto-page"  data-aos="fade-up">
            <a href="<?= $button['url'];?>"><button><?= $button['title']?></button></a>
        </div>
    </div>
</div>
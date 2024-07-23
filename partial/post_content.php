<div class="container">
    <div class="post-content">
            <div class="custom-heading"  data-aos="fade-up">
                <h2><?php the_title();?></h2>
            </div>
            <div class="post-image"  data-aos="fade-up">
                <img src="<?php the_post_thumbnail_url();?>" alt="">
            </div>
            <div class="post-description"  data-aos="fade-up"><?php the_content();?></div>
    </div>
</div>
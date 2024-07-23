<div class="testimonials-wrapper">
    <div class="container">
    <?php 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
    ?>
    <div class="custom-heading">
        <h2><?=$title;?></h2>
        <p><?=$content;?></p>
    </div>
    <div class="swiper testimonials">
        <div class="swiper-wrapper">
        <?php 
            if( have_rows('testimonial') ){
                while ( have_rows('testimonial') ) { 
                    the_row();
                $testimonial = get_sub_field('testimonial');
                ?>
                    <div class="testimonial-slide swiper-slide">
                        <div class="image">
                        <?php 
                            $image = get_the_post_thumbnail_url($testimonial->ID, 'thumbnail');
                            if($image){ ?>
                            <img src="<?=  $image;?>" alt="">
                        <?php } ?>	
                        
                            <div class="name">
                                <h3><?= get_the_title($testimonial->ID);?></h3>
                                <p><?= get_field('location', $testimonial->ID); ?></p>
                                <div class="rating">
                                <?php 
                                    for ($i=1; $i <= 5; $i++) { 
                                        echo '<svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 0L15.3064 8.63729H24.3882L17.0409 13.9754L19.8473 22.6127L12.5 17.2746L5.15268 22.6127L7.95911 13.9754L0.611794 8.63729H9.69357L12.5 0Z" fill="#FFF507"/>
                                        </svg>
                                        ';
                                    }
                                    
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <p><?= get_post_field('post_content', $testimonial->ID); ?></p>
                        </div>
                    </div>
                    <?php 
                    } 
                }
            ?>
        </div>
        <div class="testimonials-pagination"></div>
    </div>
        
    </div>
</div>
<div class="services-wrapper">
    <div class="container">
        <?php 
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $button = get_sub_field('button'); 
            $styles = get_sub_field('styles'); 
            $hide_title_and_content = get_sub_field('hide_title_and_content');
            
        ?>
            <?php if($hide_title_and_content != true){?>
                <div class="custom-heading" data-aos="fade-up">
                    <h2><?= $title;?></h2>
                    <p><?= $content; ?></p>
                </div>
            <?php }?>
        <div class="services services-<?=$styles;  if( $hide_title_and_content[0] == 'hide'){ echo ' notitle-services'; } ?>">
                <?php 
                    if( have_rows('services') ){
                        while ( have_rows('services') ) { 
                            the_row();
                        $service = get_sub_field('service');
                ?>
                <div class="service"  data-aos="fade-up">
                    <div class="services-image">
                        <a href="<?= get_permalink($service->ID); ?>">
                            <?php echo get_the_post_thumbnail($service->ID, 'thumbnail'); ?>
                        </a>
                    </div>
                    <div class="services-content">
         
                        <a href="<?= get_permalink($service->ID); ?>">
                            <h3><?= get_the_title($service->ID); ?></h3>
                            <?php if($styles == "style-1"){?>
                                <p><?= wp_trim_words(get_post_field('post_content', $service->ID), 15); ?></p>
                                <a href="<?= get_permalink($service->ID); ?>"> <button>Discover</button></a>
                            <?php } else {?>
                                <p><?php the_field('short_description', $service->ID);?></p>
                                <a href="<?= get_permalink($service->ID); ?>"><button><?php the_field('button_text', $service->ID); ?></button></a>
                            <?php } ?>
                        </a>
                    </div>
                </div>
      
        <?php 
                } 
            }
        ?>
        </div>
            <?php 
                if($button != ""){
            ?>
                <div class="goto-page"  data-aos="fade-up">
                    <a href="<?= $button['url'];?>"><button><?= $button['title']?></button></a>
                </div>
            <?php } ?>
    </div>
</div>
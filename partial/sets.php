<div class="services-wrapper">
    <div class="container">
        <div class="custom-heading" data-aos="fade-up">
            <?php $title = get_sub_field('title');?>
            <h2><?= $title;?> </h2>
        </div>
        <div class="services services-style-1 ">
                <?php 
                    if( have_rows('items') ){
                        while ( have_rows('items') ) { 
                            the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                                
                            ?>
                <div class="service"  data-aos="fade-up">
                    <div class="services-image">
                        <img src="<?= $image; ?>" alt="">
                    </div>
                    <div class="services-content">
                        <h3><?= $title; ?></h3>
                        <p><?= $content; ?></p>
                    </div>
                </div>
      
        <?php 
                } 
            }
        ?>
        </div>
    </div>
</div>
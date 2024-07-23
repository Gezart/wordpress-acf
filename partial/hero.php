<?php 
    if( get_row_layout() == 'hero' ){
    $image = get_sub_field('background');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button = get_sub_field('button_link');
?>
    <div class="hero" style="background-image:url(<?= $image;?>);">
        <div class="container">
            <div class="content">
                <h1 data-aos="fade-down"><?= $title;?></h1>
                <p data-aos="fade-up"><?= $content;?></p>
                <?php
                    if($button){ ?>
                        <a href="<?= $button['url'];?>"><button data-aos="fade-up"><?= $button['title'];?></button></a>
                    <?php }
                ?>
            </div>
        </div>
    </div>
    
<?php } ?>
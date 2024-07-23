<div class="container text-image-wrapper"  data-aos="fade-right">
    <div class="custom-heading">
        <h2><?php the_sub_field('title');?></h2>
    </div>
    <div class="text-image">
        <div class="image">
            <img src="<?php the_sub_field('image');?>" alt="">
        </div>
        <div class="content">
            <p><?php the_sub_field('content');?></p>
            <?php $button = get_sub_field('button');
                if($button){
            ?>
                <a href="<?= $button['url']?>"><button><?= $button['title']?></button></a>
            <?php } ?>
        </div>
    
    </div>
</div>

<?php 
    if( get_row_layout() == 'banner' ){
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $button = get_sub_field('button');
    $styles = get_sub_field('styles');
    
    if($styles != "style-4"){
?>
    <div class="banner banner-<?= $styles; ?>"  data-aos="fade-up" style="background-image:url(<?= $image;?>)"> 
        <div class="container">
            <h4><?= $subtitle;?></h4>
            <h3><?= $title;?></h3>
            <a href="<?= $button['url'];?>"><button><?= $button['title'];?></button></a>
        </div>
    </div>
    <?php } else{?>
        <div class="banner banner-<?= $styles; ?>" data-aos="fade-up"> 
            <div class="image">
                <img src="<?= $image;?>" alt="">
            </div>
            <div class="container">
                <div class="content">
                    <h4><?= $subtitle;?></h4>
                    <h3><?= $title;?></h3>
                    <?php if($button != null){ ?>
                        <a href="<?= $button['url'];?>"><button><?= $button['title'];?></button></a>
                    <?php }?>
                </div>
            </div>
        </div>
<?php 
    }
} ?>
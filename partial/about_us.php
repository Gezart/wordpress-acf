<?php 
    if( get_row_layout() == 'about_us' ){
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
?>
<div class="container" data-aos="fade-down">
    <div class="about-us">
        <div class="image" data-aos="fade-up">
            <img src="<?= $image;?>" alt="">
        </div>
       <div class="content-wrapper">
            <div class="content">
                <h3><?= $title;?></h3>
                <p><?= $content;?></p>
            </div>
       </div>
    </div>
</div>

    
<?php } ?>
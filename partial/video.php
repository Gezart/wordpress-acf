<link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
<div class="container"  data-aos="fade-right">
    <div class="video-wrapper">
        <?php 
            $isVideo = get_sub_field('video_or_image');
        if( $isVideo != "image"){ ?>
        <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="640"
            height="264"
            poster="<?php the_sub_field('poster_image');?>"
            data-setup="{}"
        >
            <source src="<?php the_sub_field('video');?>" type="video/mp4" />
            <source src="<?php the_sub_field('video');?>" type="video/webm" />
        </video>
        <?php } else{ ?>
            <img class="cs-image" src="<?php the_sub_field('image');?>" alt="">
        <?php } ?>
        
        <div class="video-content-wraapper"  data-aos="fade-left">
            <div class="video-content">
                <h3><?php the_sub_field('title');?></h3>
                <p><?php the_sub_field('content');?></p>
            </div>
        
        </div>
    </div>
</div>

<script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
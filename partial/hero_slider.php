
<?php 
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button = get_sub_field('button_link'); ?>
    <div class="swiper hero-swiper">
    <div class="swiper-wrapper">
        <?php  if( have_rows('images') ){
            while ( have_rows('images') ) { 
                the_row(); ?>
                <div class="hero-slide swiper-slide">
                    <img src="<?php the_sub_field('image');?>" alt="">
                </div>
                <?php 
                } 
            }
        ?>
    </div>
    <div class="container">
       <div class="content">
           <h1 data-aos="fade-down"><?=  $title;?></h1>
           <p data-aos="fade-right"><?=  $content;?></p>
           <a href="<?= $button['url'];?>"><button data-aos="fade-up"><?= $button['title'];?></button></a>
       </div>
        <div class="pagination">
            <div class="button-prev" data-aos="fade-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">  <circle cx="39.7233" cy="39.7233" r="37.2233" transform="matrix(-1 8.74228e-08 8.74228e-08 1 79.4468 0.553223)" stroke="white" stroke-width="5"/>  <path d="M15.9144 39.5268L28.8879 52.5003L28.8879 26.5532L15.9144 39.5268Z" fill="white"/>  <path d="M62.4467 41.6848L24.8245 41.6848L24.8245 37.3684L62.4467 37.3684L62.4467 41.6848Z" fill="white"/></svg>
            </div>
            <div class="button-next" data-aos="fade-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">  <circle cx="39.7233" cy="39.7233" r="37.2233" transform="matrix(1 0 0 -1 0 79.4468)" stroke="white" stroke-width="5"/>  <path d="M63.5324 40.4732L50.5588 27.4997V53.4468L63.5324 40.4732Z" fill="white"/>  <path d="M17.0001 38.3152L54.6223 38.3152V42.6316L17.0001 42.6316V38.3152Z" fill="white"/></svg>            </div>    
            </div>
    </div>
  </div>
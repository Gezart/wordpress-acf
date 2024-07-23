<div class="container">
    <div class="gallery-wrapper">
        <?php 
            $title = get_sub_field('title');
            $content = get_sub_field('subtitle');
            $images = get_sub_field('gallery');
        ?>
        <div class="custom-heading" data-aos="fade-up">
            <h2><?= $title;?></h2>
            <p><?= $content; ?></p>
        </div>
        <div class="gallery">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper full-slider"  data-aos="fade-up">
              <?php 
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  if( $images ): ?>
                      <div class="swiper-wrapper">
                          <?php foreach( $images as $image ): ?>
                              <div class="swiper-slide">
                                  <img src="<?= $image; ?>" alt="">
                              </div>
                          <?php endforeach; ?>
                      </div>
              <?php endif; ?>
          </div>
        <div thumbsSlider="" class="swiper thumb-slider"  data-aos="fade-up">
        
            <?php 
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                    <div class="swiper-wrapper">
                        <?php foreach( $images as $image ): ?>
                            <div class="swiper-slide">
                                <img src="<?= $image; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
            <?php endif; ?>
        </div>
        <div class="gallery-pagination"  data-aos="fade-right">
            <div class="button-prev"><svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="39.7233" cy="39.7233" r="37.2233" transform="matrix(-1 8.74228e-08 8.74228e-08 1 79.4463 0)" stroke="#019246" stroke-width="5"/><path d="M15.9142 38.9735L28.8877 51.9471L28.8877 26L15.9142 38.9735Z" fill="#019246"/><path d="M62.4464 41.1318L24.8242 41.1318L24.8242 36.8154L62.4464 36.8154L62.4464 41.1318Z" fill="#019246"/></svg></div>        
            <div class="button-next"  data-aos="fade-left"><svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="39.7233" cy="39.7233" r="37.2233" transform="matrix(1 0 0 -1 -0.000976562 79.8936)" stroke="#019246" stroke-width="5"/><path d="M63.5311 40.92L50.5576 27.9465V53.8936L63.5311 40.92Z" fill="#019246"/><path d="M16.9989 38.7617L54.6211 38.7617V43.0782L16.9989 43.0782V38.7617Z" fill="#019246"/></svg></div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".thumb-slider", {
      loop: true,
      spaceBetween: 20,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        767: {
          slidesPerView: 3,
          spaceBetween: 35,
        },
      },
    });
    var swiper2 = new Swiper(".full-slider", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
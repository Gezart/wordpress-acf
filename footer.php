<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo
 */

?>
	<div class="get-quote"  data-aos="fade-up">
		<div class="container">
			<div class="content">
				<h3><?php the_field('gq_title', 'option');?></h3>
				<p><?php the_field('gq_description', 'option');?></p>
			</div>
			<?php $button = get_field('gq_button', 'option');?>
			<a href="<?= $button['url'];?>"><button><?= $button['title']; ?></button></a>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-wrapper">
					<div class="footer-column column-1">
					<h3><?php the_field('column_1_title', 'option');?></h3>
					<div class="footer-menu menu-1">
					<?php if( have_rows('menu_1', 'option') ): ?>
						<?php while( have_rows('menu_1', 'option') ): the_row(); 
							$page = get_sub_field('page');?>
							<a href="<?= get_permalink($page->ID); ?>"><?= get_the_title($page->ID); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>

				<div class="footer-column column-2">
					<h3><?php the_field('column_2_title', 'option');?></h3>
					<div class="footer-menu menu-2">
					<?php if( have_rows('menu_2', 'option') ): ?>
						<?php while( have_rows('menu_2', 'option') ): the_row(); 
							$page = get_sub_field('page');?>
							<a href="<?= get_permalink($page->ID); ?>"><?= get_the_title($page->ID); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>

				<div class="footer-column column-3">
					<h3><?php the_field('column_3_title', 'option');?></h3>
					<div class="footer-contacts">
						<?php if( have_rows('contact_items', 'option') ): ?>
							<?php while( have_rows('contact_items', 'option') ): the_row(); 
								$item = get_sub_field('link');?>

								<a href="<?= $item['url'] ?>">
								<?php 
									$isIcon = get_sub_field('icon_type');
									echo $isIcon == "icon" 
									? '<img src="' . get_sub_field('icon') . '" />' 
									: get_sub_field('svg');
								?>
								<?= $item['title']; ?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="social-media">
						<?php if( have_rows('social_media', 'option') ): ?>
							<?php while( have_rows('social_media', 'option') ): the_row(); 
								$item = get_sub_field('link');?>

								<a href="<?= $item['url'] ?>">
								<?php 
									$isIcon = get_sub_field('icon_type');
									echo $isIcon == "icon" 
									? '<img src="' . get_sub_field('icon') . '" />' 
									: get_sub_field('svg');
								?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
	<div class="copyright"><p><?php the_field('copyright', 'option');?></p></div>
</div><!-- #page -->

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".hero-swiper", {
	navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
	},
    autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },

  });
  var swiper = new Swiper(".testimonials", {
      slidesPerView: 1,
      spaceBetween: 16,
      slidesPerGroupSkip: 1,
      pagination: {
        el: ".testimonials-pagination",
        clickable: true,
      },
      autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
	  breakpoints: {
        767: {
          slidesPerView: 2,
          spaceBetween: 35,
          slidesPerGroupSkip: 2,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 35,
          slidesPerGroupSkip: 3,
        },
      },
    });

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script>

jQuery(function($) {
    $('body').on('click', '#loadmore_projects', function() {
        var button = $(this);
		
        var data = {
            'action': 'loadmore',
            'query': myloadmore_params.posts,
            'page': myloadmore_params.current_page
        };

        $.ajax({
            url: myloadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Loading...');
            },
            success: function(data) {
                if (data) {
                    button.text('View more').closest('div').before(data); // Insert new posts before the button's container div
                    myloadmore_params.current_page++;

                    if (myloadmore_params.current_page == myloadmore_params.max_page) {
                        button.parent().hide(); // Hide the button's container div
                    }
                } else {
                    button.parent().hide(); // Hide the button's container div if no data is returned
                }
            },
            error: function(xhr, status, error) {
                console.error("An AJAX error occurred: " + status + '\nError: ' + error);
            }
        });
    });
});

</script>

<?php wp_footer(); ?>

</body>
</html>
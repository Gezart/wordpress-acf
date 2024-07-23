<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenLofts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js" integrity="sha512-2w85qGM9apXW9EgevsY4S4fnJIUz6U6mXlLbgDKphBuwh7jPQNad70Ll5W+pcIrJ6rIMGpjP0CxYGQwKsynIaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.css" integrity="sha512-cAtZ0Luj6XlQ7YGgi5mPW0szI2z/2+btPjOqVEqK3z4h1/qojUwvQyTcocgKKOFv8noUFH5GOuhheX7PeDwwPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- Google tag (gtag.js) --> 
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5C3ZN42LF3"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-5C3ZN42LF3'); </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
		<nav id="site-navigation" class="main-navigation">
			<div class="desktop-wrapper">
				<div class="desktop-header">
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<?php 
								$isIcon = get_field('header_logo_type', 'option');
								echo $isIcon == "icon" 
								? '<img src="' . get_field('header_logo_image', 'option') . '" />' 
								: get_field('header_logo_svg', 'option');
							?>
						</a>
						<div class="header-phone">
							<?php 
								$phone = get_field('header_phone', 'option');
								$celular = get_field('celular_phone', 'option');
							?>
							<a href="<?=  $celular['url'];?>"><?php the_field('celular_phone_icon', 'option');?><?= $celular['title']?></a>
							<?php $phone = get_field('header_phone', 'option');
							?>
							<a href="<?=  $phone['url'];?>"><?php the_field('phone_icon', 'option');?><?= $phone['title']?></a>
						</div>
					</div>
					<div class="menu-booking">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
					
				</div>	
				<div class="booking-button">
					<?php 
						$booking = get_field('booking', 'option');
						$calculator = get_field('calculator', 'option');
					if($booking){
					?>
						<a href="<?=  $booking['url'];?>"><?= $booking['title']?></a>
					<?php } if($calculator){?>
						<a href="<?=  $calculator['url'];?>"><?= $calculator['title']?></a>
					<?php }?>
				</div>
			</div>
			
			<div class="mobile-header">
				<div class="top-header">
					<div class="menu-tel">
						<svg class="open-menu" xmlns="http://www.w3.org/2000/svg" width="31" height="17" viewBox="0 0 31 17" fill="none">
						<rect width="30.6" height="3.4" rx="1.7" fill="#202020"/>
						<rect y="6.80078" width="30.6" height="3.4" rx="1.7" fill="#202020"/>
						<rect y="13.5996" width="30.6" height="3.4" rx="1.7" fill="#202020"/>
					</svg>
						<a href="<?=  $celular['url'];?>"><?php the_field('celular_phone_icon', 'option');?></a>
						<a href="<?=  $phone['url'];?>"><?php the_field('phone_icon', 'option');?></a>
					</div>
					
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<?php 
								$isIcon = get_field('header_logo_type', 'option');
								echo $isIcon == "icon" 
								? '<img src="' . get_field('header_logo_image', 'option') . '" />' 
								: get_field('header_logo_svg', 'option');
							?>
						</a>
					</div>
				</div>
				<div class="mobile-menu-wrapper">
					<div class="menu-header">
						<a href="<?php echo esc_url(home_url('/')); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="35" viewBox="0 0 60 35" fill="none">  
							<path d="M26.2496 12.2036C26.1371 12.1239 26.0105 12.0629 25.9167 11.9691C25.6307 11.6644 25.2979 11.4066 25.0025 11.1112C24.59 10.6986 24.1305 10.3329 23.6992 9.93912C23.3898 9.65783 23.0944 9.36247 22.785 9.08117C22.349 8.68267 21.9036 8.28885 21.4629 7.89035C21.1769 7.62781 20.9003 7.36058 20.6143 7.09803C20.2861 6.79799 19.9533 6.49794 19.6204 6.19789C19.0578 5.68218 18.4858 5.17585 17.9326 4.64607C17.4919 4.22413 17.0137 3.83969 16.5918 3.39899C16.4933 3.29585 16.3527 3.23022 16.2589 3.1177C16.1886 3.03331 16.1417 3.05675 16.0714 3.12239C15.565 3.58652 15.0587 4.04597 14.5524 4.51011C13.4835 5.48527 12.4145 6.46043 11.3456 7.44028C10.7689 7.96536 10.197 8.49514 9.62501 9.02022C8.90302 9.68127 8.17634 10.3423 7.45434 11.008C7.41684 11.0409 7.36058 11.069 7.36995 11.1534C7.97005 11.2143 8.56546 11.3222 9.13274 11.5425C9.45623 11.6644 9.77972 11.7957 10.1032 11.9129C10.2251 11.9598 10.2814 12.0207 10.2767 12.1614C10.2673 12.7568 10.2673 13.3475 10.2767 13.9429C10.2767 14.1023 10.2532 14.1492 10.0845 14.0695C9.76566 13.9195 9.45154 13.7741 9.12805 13.6335C8.61234 13.4131 8.07319 13.2865 7.52935 13.2256C6.68547 13.1318 5.84158 13.1318 5.02113 13.4459C3.99909 13.8351 3.30523 14.543 2.85984 15.5182C2.41446 16.498 2.35351 17.5482 2.44727 18.5937C2.53166 19.5407 2.81765 20.4315 3.43181 21.191C3.99909 21.8989 4.72577 22.3255 5.60248 22.5037C6.62921 22.71 7.62312 22.5834 8.59828 22.2271C8.72017 22.1849 8.75768 22.1239 8.75768 21.9927C8.75299 20.8909 8.7483 19.7892 8.75768 18.6874C8.75768 18.4999 8.69204 18.4765 8.52796 18.4765C7.33245 18.4811 6.13694 18.4765 4.94143 18.4811C4.76797 18.4811 4.69764 18.4483 4.70233 18.2561C4.7164 17.717 4.71171 17.1778 4.70233 16.6387C4.69764 16.4699 4.73515 16.4089 4.91799 16.4089C6.90113 16.4136 8.88426 16.4136 10.8721 16.4089C11.0456 16.4089 11.0737 16.4652 11.0737 16.6246C11.069 18.8375 11.069 21.0456 11.0737 23.2585C11.0737 23.4038 11.0221 23.4741 10.8955 23.5398C9.95788 24.0321 8.95928 24.3415 7.91848 24.529C7.19649 24.6556 6.47449 24.6462 5.74781 24.604C4.86642 24.5525 4.01784 24.3462 3.22553 23.9477C2.25037 23.4601 1.48149 22.7428 0.932965 21.7864C0.534462 21.0925 0.290672 20.3471 0.145336 19.5688C0.0375061 18.9922 0 18.4061 0 17.8154C0.00468827 16.8496 0.145336 15.9073 0.473515 14.9978C0.792317 14.107 1.2799 13.3194 1.97845 12.6771C2.29725 12.3864 2.64887 12.1332 3.02862 11.9269C3.32867 11.7629 3.56308 11.5284 3.81156 11.3081C4.33196 10.8486 4.84298 10.3798 5.34931 9.90631C5.6728 9.60626 6.03849 9.35309 6.32447 9.01553C6.39011 8.98272 6.44168 8.93583 6.47449 8.87489C7.11679 8.29354 7.76377 7.71689 8.40137 7.13085C8.77643 6.78861 9.14681 6.44168 9.5078 6.09006C10.0704 5.54153 10.6564 5.01176 11.2471 4.49136C11.5988 4.17725 11.941 3.85844 12.2879 3.53964C12.888 2.9958 13.4835 2.45665 14.0648 1.90344C14.3836 1.5987 14.7118 1.31271 15.04 1.01735C15.3869 0.70324 15.7385 0.389126 16.0808 0.0656357C16.1651 -0.0140648 16.2073 0.0281296 16.2683 0.0843888C16.8449 0.618851 17.4263 1.14863 18.0076 1.6784C18.8187 2.41915 19.6298 3.1552 20.4455 3.89595C20.4877 3.93345 20.5252 4.01784 20.5956 3.98503C20.6706 3.94752 20.6284 3.85844 20.6284 3.79281C20.6284 2.60668 20.6331 1.41586 20.6237 0.229725C20.6237 0.0468827 20.6706 0 20.8534 0C22.9256 0.00468827 24.9931 0.00937653 27.0654 0C27.2716 0 27.2998 0.0656357 27.2998 0.248478C27.2951 3.45056 27.2998 6.65265 27.2904 9.85942C27.2904 10.1173 27.3795 10.2814 27.5576 10.4361C27.853 10.6892 28.1437 10.9471 28.425 11.219C28.5375 11.3268 28.6453 11.3644 28.7953 11.3644C30.6238 11.3597 32.4522 11.3644 34.2806 11.3597C34.4775 11.3597 34.5525 11.3925 34.5431 11.6128C34.5244 12.1098 34.5291 12.6114 34.5431 13.1131C34.5478 13.2912 34.5009 13.3334 34.3228 13.3334C32.5319 13.3287 30.7456 13.3334 28.9547 13.3241C28.7062 13.3241 28.6687 13.3991 28.6734 13.6194C28.6875 14.618 28.6828 15.6213 28.6734 16.6199C28.6734 16.8215 28.7297 16.859 28.9219 16.859C30.4315 16.8496 31.9365 16.859 33.4461 16.8496C33.6289 16.8496 33.6852 16.8965 33.6805 17.084C33.6664 17.5904 33.6664 18.1014 33.6805 18.6077C33.6852 18.7906 33.6242 18.8234 33.4555 18.8234C31.9412 18.8187 30.4222 18.8234 28.9078 18.814C28.7344 18.814 28.6687 18.8421 28.6734 19.039C28.6828 20.0845 28.6828 21.1347 28.6734 22.1802C28.6734 22.3724 28.7203 22.4287 28.9172 22.424C30.7363 22.4146 32.56 22.424 34.3791 22.4146C34.59 22.4146 34.6369 22.4755 34.6322 22.6771C34.6182 23.1788 34.6228 23.6757 34.6322 24.1774C34.6322 24.318 34.5947 24.3649 34.4494 24.3649C31.7864 24.3602 29.1235 24.3602 26.4559 24.3649C26.3387 24.3649 26.2777 24.3415 26.2965 24.2102C26.3059 24.1586 26.2965 24.1024 26.2965 24.0461C26.2965 20.2111 26.2965 16.3761 26.2965 12.5364C26.2965 12.4427 26.2918 12.3489 26.2871 12.2551C26.2871 12.2082 26.2777 12.1942 26.2496 12.2036ZM25.0541 8.11539C25.0635 8.06851 25.0728 8.04975 25.0728 8.031C25.0728 6.14163 25.0728 4.25226 25.0775 2.36289C25.0775 2.21755 25.0166 2.20349 24.8994 2.20349C24.2899 2.20817 23.6804 2.21286 23.071 2.20349C22.8975 2.1988 22.8506 2.24099 22.8506 2.41915C22.86 3.38493 22.8881 4.3554 22.8412 5.32118C22.8131 5.88377 22.9209 6.32447 23.4179 6.62452C23.4648 6.65265 23.4976 6.69953 23.5398 6.73704C24.0414 7.1918 24.5384 7.64656 25.0541 8.11539Z" fill="white"/>  <path d="M50.5678 15.2658C50.5678 15.4111 50.5678 15.4955 50.5678 15.5752C50.5678 18.4116 50.5631 21.248 50.5725 24.0797C50.5725 24.3001 50.5115 24.3516 50.3005 24.3469C49.6583 24.3329 49.0206 24.3376 48.3784 24.3469C48.2377 24.3469 48.1768 24.3282 48.1768 24.1641C48.1814 19.9634 48.1814 15.758 48.1768 11.5574C48.1768 11.412 48.2049 11.3558 48.3643 11.3558C49.1379 11.3651 49.9114 11.3604 50.685 11.3558C50.8209 11.3558 50.8913 11.4073 50.9569 11.5198C51.8477 13.0013 52.7478 14.4781 53.6433 15.9596C54.5106 17.3989 55.3779 18.8382 56.2453 20.2775C56.2687 20.3197 56.2921 20.376 56.3812 20.3807C56.3812 20.2963 56.3812 20.2119 56.3812 20.1322C56.3812 17.2911 56.3812 14.4453 56.3765 11.6042C56.3765 11.412 56.4187 11.3511 56.6156 11.3558C57.2579 11.3698 57.8955 11.3698 58.5378 11.3558C58.7254 11.3511 58.7722 11.4026 58.7676 11.5902C58.7629 14.6516 58.7629 17.713 58.7629 20.7745C58.7629 21.8856 58.7582 22.992 58.7676 24.1032C58.7676 24.2907 58.7347 24.3563 58.5285 24.3516C57.7877 24.3376 57.0423 24.3376 56.3015 24.3516C56.1281 24.3563 56.039 24.2907 55.9546 24.1453C54.2152 21.2714 52.4665 18.3975 50.7225 15.5283C50.6944 15.458 50.6475 15.3877 50.5678 15.2658Z" fill="white"/>  <path d="M16.273 19.3164C16.273 20.9104 16.2637 22.5044 16.273 24.0984C16.273 24.286 16.2402 24.3516 16.0386 24.3469C15.3917 24.3329 14.74 24.3375 14.093 24.3469C13.9289 24.3469 13.8867 24.3 13.8867 24.136C13.8914 19.94 13.8914 15.744 13.8867 11.5526C13.8867 11.4073 13.9148 11.351 14.0742 11.3557C15.762 11.3651 17.4498 11.3464 19.1376 11.3745C19.944 11.3886 20.7363 11.5151 21.477 11.8668C22.4381 12.3215 23.0195 13.0716 23.2539 14.1031C23.4742 15.0782 23.4555 16.0393 23.1085 16.977C22.771 17.8959 22.1099 18.5007 21.2051 18.8523C21.0316 18.9179 20.8582 18.9789 20.6753 19.0445C21.763 20.7979 22.846 22.5513 23.9524 24.3375C23.6993 24.3375 23.4789 24.3375 23.2586 24.3375C22.6632 24.3375 22.0724 24.3329 21.477 24.3375C21.3364 24.3375 21.2614 24.2954 21.1863 24.1688C20.244 22.5841 19.2876 21.0042 18.3406 19.4242C18.2796 19.3258 18.2234 19.2555 18.0921 19.2602C17.4967 19.2695 16.906 19.2695 16.3106 19.2695C16.273 19.2695 16.2637 19.2883 16.273 19.3164ZM16.2637 15.2986C16.2637 15.8705 16.2684 16.4378 16.259 17.0098C16.2543 17.1692 16.2965 17.2208 16.4653 17.2208C17.3232 17.2114 18.1859 17.2161 19.0438 17.2161C19.311 17.2161 19.5736 17.1645 19.8221 17.0801C20.4081 16.8832 20.7925 16.4941 20.9097 15.8752C21.0504 15.1204 21.0504 14.3844 20.4034 13.8265C20.0237 13.4983 19.5455 13.4233 19.0673 13.4139C18.1905 13.3951 17.3185 13.4092 16.4418 13.3998C16.2918 13.3998 16.2637 13.4467 16.2637 13.5874C16.2684 14.1593 16.2637 14.7266 16.2637 15.2986Z" fill="white"/>  <path d="M37.2342 17.8382C37.2342 15.7613 37.2389 13.6797 37.2295 11.6028C37.2295 11.3918 37.2858 11.3496 37.4873 11.3496C40.0659 11.359 42.6444 11.359 45.223 11.3496C45.4293 11.3496 45.4855 11.3965 45.4808 11.6075C45.4621 12.1091 45.4668 12.6061 45.4808 13.1077C45.4855 13.2859 45.4293 13.3234 45.2605 13.3234C43.4649 13.3187 41.6646 13.3234 39.869 13.314C39.6721 13.314 39.6064 13.3515 39.6111 13.5672C39.6252 14.5845 39.6205 15.5972 39.6111 16.6145C39.6111 16.7974 39.6533 16.8489 39.8409 16.8489C41.3552 16.8396 42.8742 16.8489 44.3885 16.8396C44.5901 16.8396 44.6323 16.8958 44.6276 17.088C44.6135 17.5897 44.6135 18.0866 44.6276 18.5883C44.6323 18.7852 44.5666 18.8133 44.3932 18.8133C42.8789 18.8086 41.3599 18.8133 39.8455 18.804C39.6721 18.804 39.6064 18.8368 39.6111 19.029C39.6205 20.0838 39.6205 21.1387 39.6111 22.1936C39.6111 22.3717 39.658 22.4139 39.8315 22.4139C41.6599 22.4092 43.4883 22.4139 45.3168 22.4045C45.5277 22.4045 45.5746 22.4608 45.5699 22.6624C45.5559 23.1547 45.5605 23.6469 45.5699 24.1392C45.5746 24.2939 45.5465 24.3549 45.373 24.3549C42.7335 24.3502 40.094 24.3502 37.4498 24.3549C37.2623 24.3549 37.2389 24.2939 37.2389 24.1298C37.2389 22.0248 37.2389 19.9291 37.2342 17.8382Z" fill="white"/>  <path d="M30.1029 25.4063C39.7139 25.4063 49.3201 25.4063 58.9311 25.4063C59.2827 25.4063 59.2358 25.3594 59.2358 25.7204C59.2405 26.3017 59.2358 26.3017 58.6591 26.3017C39.5263 26.3017 20.3935 26.3017 1.2607 26.3017C0.941894 26.3017 0.941895 26.3017 0.941895 25.9783C0.941895 25.4063 0.941894 25.4063 1.50449 25.4063C11.0404 25.4063 20.5717 25.4063 30.1029 25.4063Z" fill="white"/>
  							<path d="M34.4357 30.9659C34.4122 30.3658 34.5857 29.6157 35.017 28.9359C35.4812 28.2045 36.1375 27.7544 36.9814 27.5622C37.8253 27.37 38.6645 27.3747 39.4756 27.6794C40.521 28.0779 41.1821 28.8421 41.4821 29.9251C41.7587 30.9237 41.7212 31.8989 41.3368 32.86C40.9336 33.8586 40.1882 34.5009 39.1521 34.7728C38.3316 34.9837 37.4877 34.9837 36.686 34.7212C35.7531 34.4165 35.092 33.7836 34.7217 32.8506C34.506 32.3021 34.4404 31.7442 34.4357 30.9659ZM35.9734 31.0315C35.9781 31.491 36.0016 31.8098 36.0953 32.1192C36.3438 32.9303 36.8361 33.4882 37.7175 33.6007C38.5473 33.7039 39.274 33.4788 39.71 32.7287C40.2819 31.7348 40.296 30.6846 39.7475 29.6719C39.3677 28.9687 38.7161 28.6874 37.9237 28.7249C37.1314 28.7624 36.5688 29.1422 36.236 29.8548C36.0391 30.2674 35.9734 30.7127 35.9734 31.0315Z" fill="white"/>  <path d="M54.7447 33.0139C55.2792 33.2718 55.8043 33.464 56.3669 33.5484C56.8544 33.6234 57.342 33.6703 57.8249 33.5672C58.1297 33.5015 58.3547 33.314 58.4719 33.0233C58.5844 32.7373 58.4719 32.4467 58.2187 32.2732C57.8952 32.0529 57.5249 31.9685 57.1592 31.8653C56.6247 31.7153 56.0809 31.584 55.6074 31.2746C55.0963 30.937 54.8432 30.4588 54.8057 29.8587C54.7729 29.2727 54.8432 28.7195 55.2182 28.2319C55.5324 27.824 55.959 27.6271 56.4372 27.5334C57.4921 27.3224 58.5141 27.4677 59.4986 27.8897C59.6205 27.9412 59.6721 28.0069 59.6674 28.1428C59.6533 28.4616 59.6627 28.7851 59.6627 29.1039C59.6627 29.2352 59.6487 29.2868 59.4939 29.2165C59.0767 29.0242 58.6454 28.8555 58.1812 28.7992C57.7218 28.7383 57.2623 28.6726 56.8029 28.7804C56.4981 28.8555 56.3434 29.0711 56.2965 29.3524C56.2497 29.6431 56.2872 29.9291 56.5872 30.1025C56.9717 30.3229 57.4077 30.4073 57.8249 30.5292C58.3266 30.6745 58.8376 30.8105 59.2689 31.134C59.7284 31.4762 59.9487 31.9403 59.9909 32.5029C60.0284 33.0093 59.9534 33.4968 59.658 33.9235C59.3392 34.3829 58.8845 34.6408 58.3547 34.7908C57.8296 34.9408 57.2951 34.8986 56.7607 34.8846C56.0996 34.8658 55.4761 34.7064 54.8666 34.4579C54.7869 34.4251 54.7354 34.3829 54.7354 34.2704C54.7541 33.8625 54.7447 33.4546 54.7447 33.0139Z" fill="white"/>  <path d="M42.8829 31.1537C42.8829 30.0285 42.8876 28.9033 42.8782 27.7782C42.8782 27.6 42.9298 27.5625 43.0985 27.5625C44.4956 27.5719 45.8928 27.5719 47.2945 27.5625C47.4868 27.5625 47.5336 27.6188 47.5243 27.7969C47.5102 28.0595 47.5102 28.3267 47.5243 28.5939C47.5383 28.8049 47.4774 28.8799 47.2524 28.8752C46.371 28.8611 45.4896 28.8752 44.6035 28.8658C44.4347 28.8658 44.3738 28.8987 44.3784 29.0815C44.3925 29.5409 44.3925 30.0051 44.3784 30.4645C44.3738 30.638 44.4347 30.6661 44.5894 30.6661C45.3395 30.6568 46.0897 30.6661 46.8398 30.6568C47.0086 30.6568 47.0508 30.7036 47.0461 30.8677C47.032 31.1584 47.032 31.4444 47.0461 31.7351C47.0554 31.9273 46.9804 31.9695 46.8023 31.9695C46.0662 31.9601 45.3348 31.9695 44.5988 31.9601C44.4253 31.9601 44.3738 31.9976 44.3784 32.1758C44.3878 32.9587 44.3784 33.7369 44.3878 34.5199C44.3878 34.684 44.3597 34.7543 44.1768 34.7449C43.8205 34.7262 43.4595 34.7309 43.0985 34.7449C42.9298 34.7496 42.8735 34.7121 42.8782 34.5293C42.8876 33.4041 42.8829 32.2789 42.8829 31.1537Z" fill="white"/>  <path d="M50.2959 31.7952C50.2959 30.8904 50.2912 29.9856 50.3006 29.076C50.3006 28.9166 50.2677 28.8604 50.099 28.8651C49.5598 28.8744 49.0207 28.8651 48.4815 28.8744C48.3268 28.8791 48.2799 28.8369 48.2846 28.6822C48.2987 28.3681 48.294 28.0587 48.2846 27.7446C48.2799 27.618 48.3127 27.5664 48.4487 27.5664C50.1834 27.5711 51.9133 27.5711 53.648 27.5664C53.7652 27.5664 53.8168 27.5898 53.8121 27.7211C53.8027 28.0493 53.8027 28.3775 53.8121 28.7057C53.8168 28.8416 53.7699 28.8791 53.6386 28.8744C53.1088 28.8697 52.5744 28.8791 52.0446 28.8651C51.8524 28.8604 51.7961 28.9119 51.7961 29.1088C51.8055 30.8951 51.7961 32.686 51.8055 34.4722C51.8055 34.6785 51.768 34.7582 51.5429 34.7441C51.1866 34.7207 50.8256 34.7301 50.4646 34.7441C50.3146 34.7488 50.2818 34.6973 50.2865 34.5566C50.3006 33.6377 50.2959 32.7141 50.2959 31.7952Z" fill="white"/>  <path d="M29.4756 31.1635C29.4756 30.0477 29.4803 28.9319 29.4709 27.8161C29.4662 27.6004 29.5319 27.5582 29.7335 27.5676C30.0663 27.5817 30.4039 27.5817 30.7415 27.5676C30.9337 27.5582 30.9899 27.6051 30.9899 27.8067C30.9806 29.6023 30.9899 31.3979 30.9806 33.1935C30.9806 33.4045 31.0368 33.4514 31.2384 33.4467C31.9651 33.4326 32.6918 33.4514 33.4185 33.4373C33.6529 33.4326 33.7138 33.5123 33.6998 33.728C33.681 34.014 33.6904 34.3046 33.6951 34.5953C33.6951 34.7031 33.6622 34.7453 33.5497 34.7453C32.237 34.7407 30.9243 34.7407 29.6163 34.7453C29.4381 34.7453 29.485 34.6281 29.485 34.5391C29.4756 33.4139 29.4756 32.2887 29.4756 31.1635Z" fill="white"/>  <path d="M26.249 12.2041C26.2772 12.1947 26.2912 12.2088 26.2818 12.2369C26.2678 12.2275 26.2584 12.2181 26.249 12.2041Z" fill="#FDFDFD"/>  <path d="M16.2734 19.3164C16.264 19.2836 16.2734 19.2695 16.3109 19.2695C16.2968 19.2883 16.2828 19.3023 16.2734 19.3164Z" fill="#DBDBDB"/>
						</svg>
						</a>
						<div class="close-menu">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">  <rect x="2.4043" y="0.404297" width="30.6" height="3.4" rx="1.7" transform="rotate(45 2.4043 0.404297)" fill="white"/>  <rect x="24.4043" y="2.4043" width="30.6" height="3.4" rx="1.7" transform="rotate(135 24.4043 2.4043)" fill="white"/></svg>
						</div>
					</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
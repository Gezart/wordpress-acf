<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GreenLofts
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php 
			global $post;
			// $id = get_the_ID();
			// check if the flexible content field has rows of data
			if ( have_rows( 'sections' ) ) :
				// loop through the selected ACF layouts and display the matching partial
				while ( have_rows( 'sections' ) ) : the_row();
					get_template_part( 'partial/' . get_row_layout() );
				endwhile;
			elseif ( get_the_content() ) :
			// no layouts found
			endif;					
		?>
	</main><!-- #main -->

<?php
get_footer();

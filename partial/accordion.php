<?php 
   if( have_rows('accordion') ){
        while ( have_rows('accordion') ) { 
            the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
?>

    
<?php 
        } 
    }
?>
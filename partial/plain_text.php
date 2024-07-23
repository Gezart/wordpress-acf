<div class="container">
    <?php 
        if( get_row_layout() == 'plain_text' ){
            $column = get_sub_field('column');  
    ?>
            <div class="columns">
                
                <?php 
                    if( have_rows('plain_text') ){
                        while ( have_rows('plain_text') ) {  
                            the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            ?>

            
                <div class="column"  data-aos="flip-left">
                        <div class="image">
                            <img src="<?= $image;?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?= $title;?></h3>
                            <p><?= $content;?></p>
                        </div>
                </div>
        
    <?php 
                        }
                    } ?>
</div>
    <?php    } 
    ?>
</div>
<div class="container">
    <div class="contacts">
        <?php  if( have_rows('contacts') ){
                while ( have_rows('contacts') ) { 
                    the_row(); ?>
                        <div class="contact" data-aos="flip-left">
                            <div class="icon">
                                <?php the_sub_field('icon');?>
                            </div>
                            <?php 
                                $contact = get_sub_field('contact');
                            ?>
                            <a href="<?= $contact['url']?>"><?= $contact['title']?></a>
                        </div>
                    <?php 
                    } 
                }
            ?>
    </div>
</div>
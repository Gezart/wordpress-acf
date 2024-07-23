<div class="container">
    <?php
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $form = get_sub_field('contact_form');
    ?>
    <div class="contact-form" data-aos="fade-up">
        <div class="custom-heading">
            <h2><?= $title;?></h2>
            <p><?= $content; ?></p>
        </div>
        <?= do_shortcode($form);?>
    </div>
</div>
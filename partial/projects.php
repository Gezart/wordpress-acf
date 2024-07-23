<div class="projects-wrapper">
    <div class="container">
        <?php 
            $title = get_sub_field('title');
            $content = get_sub_field('content');
        ?>
            <div class="custom-heading"  data-aos="fade-up">
                <h2><?= $title;?></h2>
                <p><?= $content; ?></p>
            </div>
        <div class="projects">
                <?php 
                    if( have_rows('projects') ){
                        while ( have_rows('projects') ) { 
                            the_row();
                        $project = get_sub_field('project');
                ?>
                
							<div class="project">
                                <div class="project-image">
                                    <img src="<?php echo get_the_post_thumbnail_url($project->ID, 'thumbnail'); ?>" alt="">
                                </div>
                              
                                <div class="project-content">
                                    <h3><?= get_the_title($project->ID); ?></h3>
                                    <a href="<?= get_permalink(); ?>"><button>View more</button></a>
                                </div>
                            </div>
			
        <?php 
                } 
            }
        ?>
        </div>
    </div>
</div>
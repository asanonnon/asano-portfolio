<div class="post-item" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>">
        <div class="post-top">
            <div class="post-thumb">

            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail();?>
            <?php else:?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psImg.jpg" alt="">
            <?php endif;?>
            
                <div class="post-title">
                    <p><?php the_title();?></p>
                </div>
            </div>                                                        
        </div>
        <div class="post-time"><?php the_time('Y年m月d日');?></div>
    </a>
</div>
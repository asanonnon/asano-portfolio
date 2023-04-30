<?php get_header();?>

    <main> 

        <div class="blog-area">
            <div class="title" translate="no">BLOG</div>
            <div class="blog-wrap">
                <div class="post-area">
                    
                    <!-----------------post--------------->
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post()?>
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
                                        <?php the_title();?>
                                    </div>
                                </div>                                                        
                            </div>
                            <div class="post-time"><?php the_time('Y年m月d日');?></div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-------------------------------->
                    

                </div>
               
                <?php get_sidebar(); ?>

            </div>
        </div>
        

    </main>


<?php get_header();?>
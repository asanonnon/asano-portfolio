<?php get_header();?>

    <main>
        <div class="main-title">
            <div class="title-top">
                <div class="title-decoration">
                    <i class="fa-brands fa-freebsd"></i>
                </div>
                <div class="title">
                    <div class="title01">ASANO</div>
                    <div class="title02">PORTFOLIO</div>
                </div>
                
            </div>

            <div class="sub-title">
                2022/09/20 start::
            </div>
        </div>



        <div class="content-area">
            <div class="content-item">
                <div class="content-img">
                    <div class="content-border">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psImg.jpg" alt="">
                    </div>                    
                </div>
                <div class="content-text">
                    <div>
                        <h1>sample</h1>
                        <p>
                            text text text text text text text text text 
                            text text text text text text text text text 
                            text text text text text text text text text 
                            text text text text text text text text text 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-area-home">
            <h1 class="title">BLOG </h1>
            <div class="blog-wrap-home">

<?php if(have_posts()): ?> 
    <?php
        while(have_posts()):
        the_post();
        ?>

                <a  href="<?php the_permalink();?>" class="blog-item-home" id="post-<?php the_ID(); ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail();?>
                    <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psImg.jpg" alt="">
                    <?php endif;?>

                    <div class="blog-title">
                        <p><?php the_title(); ?></p>
                    </div>
                </a>

    <?php endwhile;?>
<?php endif;?>
                

                
            </div>

        </div>


    </main>


    <?php get_footer();?>
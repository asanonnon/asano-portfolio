<?php get_header();?>

    <main> 

        <div class="blog-area">
            <div class="title" translate="no">BLOG</div>
            <div class="blog-wrap">
                <div class="post-area">
                    
                    <!-----------------post--------------->
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post()?>
                    
                            <?php get_template_part("template-parts/loop","news"); ?>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <div class="text-conter">
                        <p>検索結果がありませんでした</p>
                    </div>
                    <?php endif;?>
                    <!-------------------------------->

                </div>
               
                <?php get_sidebar(); ?>

            </div>
        </div>
        

    </main>


<?php get_footer();?>
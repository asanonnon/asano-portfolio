<?php get_header(); ?>

    <main>  

        <div class="blog-area">
            <div class="title">BLOG</div>
            <div class="blog-wrap">
                <div class="post-area">
                    
                    <!-----------------post--------------->

                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post();?>
                    
                        <article id="post-<?php the_ID() ?>" <?php post_class("article"); ?>>
						<div class="article_header">
							<h2 class="article_title"><?php the_title() ?></h2>
							<div class="article_meta">
									<?php the_category()?>
								<time class="post_time" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("Y年m月d日"); ?></time>
							</div>
						</div>

						<div class="article_body">
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>

						<div class="postLinks">
							<div class="postLink postLink-prev"><?php previous_post_link("<i class='fas fa-chavron-left'></i>%link");?></div>
							<div class="postLink postLink-next"><?php next_post_link("%link<i class'fas fa-chevron-right'></i>");?></div>
						</div>
					</article>

                        <?php endwhile; ?>
                    <?php endif;?>

                    <!-------------------------------->

                    

                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        

    </main>


<?php get_footer(); ?>
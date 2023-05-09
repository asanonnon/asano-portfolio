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
                        <ul class="main-list-wrap">
                            <li class="main-list-item">
                                <p class="main-list-txt01">ユーザーの理解</p>
                                <p class="main-list-txt02">デザインはユーザーにとって使いやすく魅力的なものでなければなりません。ユーザーのニーズや要求を理解し、彼らの目線で考えることが重要です。</p>
                            </li>
                            <li class="main-list-item">
                                <p class="main-list-txt01">シンプル</p>
                                <p class="main-list-txt02">シンプルなデザインは情報を明確に伝え、使いやすさを高めます。不要な要素を削ぎ落とし、視覚な生合成を保つことを心がけます。</p>
                            </li>
                            <li class="main-list-item">
                                <p class="main-list-txt01">コミュニケーション</p>
                                <p class="main-list-txt02">デザイナーは、チームとの協力が欠かせません、アイデアや意図を明確に伝え、フィードバックを受	け入れる姿勢を持ちます。</p>
                            </li>
                        </ul>
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
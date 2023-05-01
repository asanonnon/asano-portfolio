<div class="side-bar">
                    
    <form class="search-form" action="<?php echo home_url("/");?>" method="get">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="search" name="s" value="<?php the_search_query(); ?>">
    </form>

    <div class="tag-form">
        <ul>
            <?php
                $args = array(
                    "title_li" => '', //見出しを削除
                );
                wp_list_categories($args);
            ?>
        </ul>
    </div>

</div>
<div class="side-bar">
                    
    <div class="search-form">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" name="search" placeholder="search">
    </div>

    <div class="tag-form">
        <?php
            $args = array(
                "title_li" => '', //見出しを削除
            );
            wp_list_categories($args);
        ?>
    </div>

</div>
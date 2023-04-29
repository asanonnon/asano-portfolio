<?php
    function theme_script(){
        // The core GSAP library
        wp_enqueue_script( 'gsap-js', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js", array(), false, true );
        wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array('gsap-js'), false, true );
        wp_enqueue_script('script',get_template_directory_uri()."/assets/js/script.js",array("gsap-js"),false,true);

        // google-font font-awesome 
        wp_enqueue_style('google-font01',"https://fonts.googleapis.com");
        wp_enqueue_style('google-font02',"https://fonts.gstatic.com");
        wp_enqueue_style('google-font03',"https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Rubik:ital,wght@0,400;1,700&display=swap");
        wp_enqueue_style('font-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
        wp_enqueue_style('main-style', get_template_directory_uri()."/assets/css/style.css",array('google-font01','google-font02','google-font03'));
    }

    function my_pre_get_posts( $query ) {
        if(is_admin() || ! $query -> is_main_query()) return;
        if($query -> is_front_page()) { //フロントページ
            $query -> set('posts_per_page',4); //4件
        }
    }

    add_action('pre_get_posts','my_pre_get_posts');
    add_action('wp_enqueue_scripts', 'theme_script');
    add_action('wp_body_open',function(){});

    //   タイトル生成
    add_theme_support('title-tag');

    add_filter("document_title_separator","my_document_title_separator");
        function my_document_title_separator($separator){
          $separator = "|";
          return $separator;
    }

  //アイキャッチ使用可能
    add_theme_support('post-thumbnails');

  //カスタムメニュー機能を使用可能にする
    add_theme_support('menus');

?>
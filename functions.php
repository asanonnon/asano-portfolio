<?php
    function theme_script(){
        // The core GSAP library
        wp_enqueue_script( 'gsap-js', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js", array(), false, true );
        wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array('gsap-js'), false, true );
        wp_enqueue_script('script',get_template_directory_uri()."/assets/js/script.js",array("gsap-js"),false,true);

        wp_enqueue_style('main-style', get_template_directory_uri()."/assets/css/style.css");
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



  // formの<be>,<p>タグを自動挿入されなくなるやつ
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

?>
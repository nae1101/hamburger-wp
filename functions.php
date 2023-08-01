<?php
    function custom_theme_support(){
        //HTML5追加する
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        //テーマサポート
        add_theme_support( 'menus' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' ); //新たに追加
        register_nav_menus(array(
            'footer_nav'=>esc_html__('footer navigation','hamburger'),
            'sidebar_nav'=>esc_html__('sidebar navigation','hamburger'),
        ));
        add_theme_support('editor-styles');
        add_editor_style();
    }
    add_action('after_setup_theme','custom_theme_support');

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    
    function hamburger_script() {
        wp_enqueue_style('reset', get_theme_file_uri('/scss/foundation/_reset.scss'));
        wp_enqueue_style( 'MplusRobot', '//fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@700&family=M+PLUS+1:wght@400;700&family=Noto+Sans+JP:wght@500&family=Roboto:wght@700&display=swap', array() );
        wp_enqueue_style( 'web-font', '//fonts.googleapis.com', array(), '' );
        wp_enqueue_style( 'web-font2', '//fonts.gstatic.com', array(), '' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    //サイドバー
    function wpbeg_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
        register_sidebar(
            array(
                'name'          => 'アーカイブウィジェット',
                'id'            => 'archive_widget',
                'description'   => 'アーカイブ用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
          );
    }
    add_action( 'widgets_init', 'wpbeg_widgets_init' );

    function custom_print_scripts() {
        if (!is_admin()) {
                //デフォルトjquery削除
                wp_deregister_script('jquery');
         
                //GoogleCDNから読み込む
                wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js' );
                wp_enqueue_script( 'bundle', get_theme_file_uri( '/js/main.js' ), 'jquery', true );
            
                }
        }
        add_action('wp_print_scripts', 'custom_print_scripts');


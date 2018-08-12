<?php
    
    //remove admin bar
    add_filter('show_admin_bar', '__return_false');

    //define some variables for easier connecting images
    define ('TB_THEME_ROOT', get_template_directory_uri());
    define ('TB_IMG_DIR', TB_THEME_ROOT . '/img/');

    //registering all styles
    function register_styles() {
        //register animate css
        wp_register_style('my-animate', get_template_directory_uri() . 
                         '/css/animate.min.css');
        wp_enqueue_style('my-animate');
        
        //register normalize css
        wp_register_style('my-normalize', get_template_directory_uri() . 
                         '/css/normalize.min.css');
        wp_enqueue_style('my-normalize');
        
        //register style css
        wp_register_style('my-style', get_template_directory_uri() . 
                         '/style.css');
        wp_enqueue_style('my-style');
    }

    add_action( 'wp_enqueue_scripts', 'register_styles' );

    
    //registering all js scripts and plugins
    function register_scripts() {
        //deregistering wp jquery
        wp_deregister_script('jquery');
        
        //register jquery current version
        wp_register_script('jquery', get_template_directory_uri() .
                          '/js/jquery-3.3.1.min.js', array(), null, true);
        wp_enqueue_script('jquery');
        
        //register main js
        wp_register_script('main-js', get_template_directory_uri() .
                          '/js/main.js', array(), null, true);
        wp_enqueue_script('main-js');
    }

    add_action( 'wp_enqueue_scripts', 'register_scripts' );


    /* Add menus */
    add_action('after_setup_theme', function(){
	   register_nav_menus( array(
		  'header_menu' => 'Меню в шапке',
		  'footer_menu' => 'Меню в подвале',
          'dropdown_menu' => 'Меню для мобильных устройств'
	) );
        
    
    add_action('init', function () {  
        
        add_theme_support( 'post-thumbnails'); 
        
        register_post_type('main_cards', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'Карточки на главной', 
                'singular_name'      => 'Карточки на главной', 
                'add_new'            => 'Добавить новую', 
                'add_new_item'       => 'Добавить новую карточку',
                'edit_item'          => 'Редактировать карточку', 
                'new_item'           => 'Новая карточка', 
                'view_item'          => 'Показать карточку',
                'not_found'          => 'Карточка не найдена', 
                'not_found_in_trash' => 'Карточка не найдена в корзине', 
                'menu_name'          => 'Карточки на главной', 
            ),
            'public'              => false,
            'show_ui'             => true, //public dependence
            'menu_icon'           => 'dashicons-format-status',
            'supports'            => array('title', 'thumbnail')
        ) );
        
        
        register_post_type('themes_cards', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'Карточки на themes', 
                'singular_name'      => 'Карточки на themes', 
                'add_new'            => 'Добавить новую', 
                'add_new_item'       => 'Добавить новую карточку',
                'edit_item'          => 'Редактировать карточку', 
                'new_item'           => 'Новая карточка', 
                'view_item'          => 'Показать карточку',
                'not_found'          => 'Карточка не найдена', 
                'not_found_in_trash' => 'Карточка не найдена в корзине', 
                'menu_name'          => 'Карточки на themes', 
            ),
            'public'              => false,
            'show_ui'             => true, //public dependence
            'menu_icon'           => 'dashicons-format-status',
            'supports'            => array('title', 'thumbnail')
        ) );
    });
        
        
    function get_main_cards() {
        $args = array(
            'orderby'   => 'date',
            'order'     => 'ASC',
            'post_type' => 'main_cards',
            'numberposts' => -1
        );
        
        $main_cards = [];
        
        foreach ( get_posts($args) as $post ) {
            $main_cards_i = get_fields($post->ID);
            $main_cards_i['name'] = $post->post_title;
            $main_cards_i['img'] = get_the_post_thumbnail_url( $post->ID, 'image' );
            $main_cards[] = $main_cards_i;
        }
        
        return $main_cards;
    }
        
        
        
    function get_themes_cards() {
        $args = array(
            'orderby'   => 'date',
            'order'     => 'ASC',
            'post_type' => 'themes_cards',
            'numberposts' => -1
        );
        
        $themes_cards = [];
        
        foreach ( get_posts($args) as $post_2 ) {
            $themes_cards_i = get_fields($post_2->ID);
            $themes_cards_i['name'] = $post_2->post_title;
            $themes_cards_i['img'] = get_the_post_thumbnail_url( $post_2->ID, 'image' );
            $themes_cards[] = $themes_cards_i;
        }
        
        return $themes_cards;
    }

});
    
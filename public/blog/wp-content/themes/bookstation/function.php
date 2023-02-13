<?php 
	if ( ! function_exists( 'bookstation_setup' )) {
		function bookstation_setup()
		{
			$lang_dir = get_stylesheet_directory_uri() . '/assets/language';
			load_theme_textdomain( 'bookstation', $lang_dir );
			add_theme_support( 'automatic_feed_links' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'post-formats', [
				'gallery', 'link', 'audio', 'video', 'quote'
			] );

			register_nav_menus( [
				'top-menu' => __( 'Top Menu', 'bookstation'),
				'footer-menu' => __( 'Footer Menu', 'bookstation'),
			] );
		}
		add_action( 'after_setup_theme', 'bookstation_setup' );
	}

	if ( ! function_exists( 'bookstation_widget_init' )) {
		function bookstation_widget_init() {
			$widget = [
				'name' => __( 'Sidebar One'),
				'id' => 'sidebar-one',
				'description' => __( 'Apears in sidebar Column One'),
				'class' => '',
				'before_widget' => '<ul class="check">',
				'after_widget' => '</ul>',
				'before_title' => '<div class="widget-title"><h4>', 
				'after_title' =>  '</h4><hr></div>'
			];

			register_sidebar( $widget );

			$widget = [
				'name' => __( 'Sidebar Two'),
				'id' => 'sidebar-two',
				'description' => __( 'Apears in sidebar Column Two'),
				'class' => '',
				'before_widget' => '<ul class="check">',
				'after_widget' => '</ul>',
				'before_title' => '<div class="widget-title"><h4>', 
				'after_title' =>  '</h4><hr></div>'
			];

			register_sidebar( $widget );
		}
		add_action( 'widgets_init', 'bookstation_widget_init' );
	}
<?php
    
    /*
	=====================
		Custom Post Types
	=====================	
    */
    
    /**
     * Post Type: Programs
     */
    function cptui_register_my_cpts_programs()
    {
        $labels = array(
            'name' => __('Programs', 'lastauskas'),
            'singular_name' => __('Program', 'lastauskas'),
        );
        
        $args = array(
            'label' => __('Programs', 'lastauskas'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'mokymai',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array('title', 'editor'),
            'show_in_graphql' => false,
        );
        
        register_post_type('programs', $args);
    }
    
    add_action('init', 'cptui_register_my_cpts_programs');
    
    /**
     * Post Type: Clients
     */
    function cptui_register_my_cpts_clients()
    {
        $labels = array(
            'name' => __('Clients', 'lastauskas'),
            'singular_name' => __('Client', 'lastauskas'),
        );
        
        $args = array(
            'label' => __('Clients', 'lastauskas'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'klientai',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-businessman',
            'supports' => array('title', 'thumbnail'),
            'show_in_graphql' => false,
        );
        
        register_post_type('clients', $args);
    }
    
    add_action('init', 'cptui_register_my_cpts_clients');


	/**
	 * Post Type: Reviews.
	 */
  function cptui_register_my_cpts_reviews() {

    $labels = [
      "name" => esc_html__( "Reviews", "lastauskas" ),
      "singular_name" => esc_html__( "Reviews", "lastauskas" ),
    ];

    $args = [
      "label" => esc_html__( "Reviews", "lastauskas" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => [ "slug" => "atsiliepimai", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail" ],
      "show_in_graphql" => false,
      'menu_icon' => 'dashicons-format-quote'
    ];

    register_post_type( "reviews", $args );
  }

  add_action( 'init', 'cptui_register_my_cpts_reviews' );

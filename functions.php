<?php

  function theme_styles(){


    wp_enqueue_style('rigel-styles', get_stylesheet_uri());



  }

  function theme_scripts(){


    wp_enqueue_script('rigel-scripts', get_template_directory_uri() . '/scripts.js', NULL, microtime(), true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js', NULL, microtime(), true);



  }

  function custom_post_types(){

    register_post_type('projects', array(

      'labels' => array(

        'name' => __('Projects'),
        'singular_name' => __('Project')

      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-art'

      )

    );

    register_post_type('team', array(

      'labels' => array(

        'name' => __('Team'),
        'singular_name' => __('Team Member')


      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users'



    )


  );

  }

  show_admin_bar(false);

  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('wp_enqueue_scripts', 'theme_scripts');
  add_action('init', 'custom_post_types');

  

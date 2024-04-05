<?php 

/*
  Plugin Name: Balls to the wall
  Description: Theme's additional content
  Version: 1.0
  Author: R. Garcia
  Author URI: https://roopegarcia.netlify.app
*/

function custom_post_types() {
  register_post_type('programs', array(
    'public' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    'has_archive' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Ohjelma',
      'add_new_item' => 'Lisää uusi ohjelma',
      'new_item' => 'Lisää uusi ohjelma',
      'add_new' => 'Lisää uusi ohjelma',
      'edit_item' => 'Muokkaa ohjelmaa',
      'all_items' => 'Kaikki ohjelmat',
      'singular_name' => 'Ohjelma'
    ),
    'menu_icon' => 'dashicons-superhero-alt'
  ));

  // register_post_type('referenssit', array(
  //   'public' => true,
  //   'has_archive' => true,
  //   'show_in_rest' => true,
  //   'labels' => array(
  //     'name' => 'Referenssit',
  //     'add_new_item' => 'Lisää uusi referenssi',
  //     'new_item' => 'Lisää uusi referenssi',
  //     'add_new' => 'Lisää uusi referenssi',
  //     'edit_item' => 'Muokkaa referenssiä',
  //     'all_items' => 'Kaikki referenssit',
  //     'singular_name' => 'Referenssi'
  //   ),
  //   'menu_icon' => 'dashicons-superhero-alt'
  // ));
}

add_action('init', 'custom_post_types');
add_post_type_support( 'programs', 'thumbnail', 'excerpt' );

// add_post_type_support( 'music', 'thumbnail' );

add_action('init', function() {
  register_taxonomy('osa', ['programs'], [
    'label' => __('Osa', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'osa'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Osa', 'txtdomain'),
      'all_items' => __('Kaikki osat', 'txtdomain'),
      'edit_item' => __('Muokkaa osaa', 'txtdomain'),
      'view_item' => __('Näytä osa', 'txtdomain'),
      'update_item' => __('Päivitä osa', 'txtdomain'),
      'add_new_item' => __('Lisää nuevo osa', 'txtdomain'),
      'new_item_name' => __('Uuden osan nimi', 'txtdomain'),
      'separate_items_with_commas' => __('Erottele stevet pilikulla', 'txtdomain'),
      'not_found' => __('Oh shit, osaa EI Löytynyt!', 'txtdomain'),
    ]
  ]);
});

// add_post_type_support( 'tuotteet', 'thumbnail' );

<?php
function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

add_image_size( 'banner', 1920, 9999 ); //300 pixels wide (and unlimited height)
add_image_size( 'post-image', 1500, 450, true );
add_image_size( 'post-listing-image', 260, 200, true );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* Change [...] read more to a link */
// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
  global $post;
return '<br /><a class="moretag" href="'. get_permalink($post->ID) . '">Read all about it ➪</a><br />';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_login_logo() { ?>
  <style type="text/css">
      .login {
        background-color: #000000;
      }
      #login {
        padding: 0;
        background-color: #000000;
      }
      #login .message {
        background: #000000;
        border-left: 0;
        color: #ffffff;
      }
      #loginform .button-primary {
        background: #000000;
        border-color: #ffffff;
        color: #fff;
        text-decoration: none;
        text-shadow: none;
        text-transform: uppercase;
      }
      #loginform {
        background: #000000;
        color: #ffffff;
        border: 0;
      }
      #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.svg);
          height:250px;
          width:250px;
          background-size: 250px;
          background-repeat: no-repeat;
        }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function mytheme_custom_excerpt_length( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

// Remove Gravity Forms text about required fields
add_filter( 'gform_required_legend', '__return_empty_string' );

// add_filter( 'comments_number', 'wporg_com_num', 10, 2 );
// function wporg_com_num ( $out, $num ) { // Two parameter as in filter described
//     if ( 0 === $num ) { 
//         $out = 'No Comments so'; // If No comments
//     } elseif ( 1 === $num ) {
//         $out = '1 Comment'; // If 1 comment
//     } else {
//         $out = $num . ' Comments'; // More than 1 comment
//     }

//     return _n( '1 Comment', $num . ' Comments', $num );
// }
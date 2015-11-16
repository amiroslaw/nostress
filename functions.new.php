<?php 
function load_styles_and_scripts() {
  
  // loading CSS
  wp_enqueue_style(
      'bootstrap-styles',
      'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'
  );
  wp_enqueue_style(
      'font-awesome',
      'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'
    );
  wp_enqueue_style(
      'main-styles',
      get_template_directory_uri().'/style.css'
  );
  // loading bootstrap js
  wp_enqueue_script(
    'bootstrap-js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',
    false,
    '3.2.0',
    true
  );
    
  // loading js
  wp_enqueue_script(
    'jquery',
    'http://code.jquery.com/jquery.min.js',
    false,
    '1.11.1',
    true
  );
 wp_enqueue_script('jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery') ,'', true);
 wp_enqueue_script('grayscale', get_template_directory_uri(). '/js/grayscale.js', array('jquery') ,'', true);
}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

?>

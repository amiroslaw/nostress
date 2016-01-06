<?php 
function styles() {
  // Loads Bootstrap minified CSS file.
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  // Loads our main stylesheet.
  wp_enqueue_style('grayscale_style', get_template_directory_uri() . '/css/grayscale.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
 add_action('wp_enqueue_scripts', 'styles');
function js() {
  // Loads jquery 
// podobno nie dodaje sie jquery bo sam wp generuje f
  // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery') ,'', true);
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'', true );
  // Loads  grayscale.
  wp_enqueue_script('grayscale', get_template_directory_uri(). '/js/grayscale.js', array('jquery') ,'', true);
  wp_enqueue_script('jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery') ,'', true);
}
 add_action('wp_enqueue_scripts', 'js');

?>

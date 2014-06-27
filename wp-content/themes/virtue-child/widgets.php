<?php
function kadence_widgets_extra() {
  //Topbar 
  if(kadence_display_topbar_widget()) {
  register_sidebar(array(
    'name'          => __('ChrisFooter', 'virtue'),
    'id'            => 'Chrisextra',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary Sidebar', 'virtue'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  // Footer
  global $virtue; if(isset($virtue['footer_layout'])) { $footer_layout = $virtue['footer_layout'];} else {$footer_layout = "twoc";}
  if ($footer_layout == "fourc") {
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 1', 'virtue'),
        'id' => 'footer_1',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 2', 'virtue'),
        'id' => 'footer_2',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 3', 'virtue'),
        'id' => 'footer_3',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 4', 'virtue'),
        'id' => 'footer_4',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
  } else if ($footer_layout == "threec") {
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 1', 'virtue'),
        'id' => 'footer_third_1',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 2', 'virtue'),
        'id' => 'footer_third_2',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
    if ( function_exists('register_sidebar') )
      register_sidebar(array(
        'name' => __('Footer Column 3', 'virtue'),
        'id' => 'footer_third_3',
        'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      )
    );
  } else {
      if ( function_exists('register_sidebar') )
        register_sidebar(array(
          'name' => __('Footer Column 1', 'virtue'),
          'id' => 'footer_double_1',
          'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
          'after_widget' => '</aside></div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        )
      );
      if ( function_exists('register_sidebar') )
        register_sidebar(array(
          'name' => __('Footer Column 2', 'virtue'),
          'id' => 'footer_double_2',
          'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
          'after_widget' => '</aside></div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        )
      );
    }

  // Widgets
  register_widget('Kadence_Contact_Widget');
  register_widget('Kadence_Social_Widget');
  register_widget('Kadence_Recent_Posts_Widget');
  register_widget('Kadence_Image_Grid_Widget');
  register_widget('Simple_About_With_Image');
}
add_action('widgets_init', 'kadence_widgets_extra'); 
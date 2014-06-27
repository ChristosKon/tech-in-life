<?php
function virtue_extra(){
 register_sidebar(array(
    'name'          => __('Chrisextra', 'virtue'),
    'id'            => 'chrisextra',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
add_action('widgets_init', 'virtue_extra');
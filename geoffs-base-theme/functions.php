<?php
// add jQuery to the theme
function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');

// jssor slider script
function include_jssor(){
	wp_enqueue_script( 'jssor', get_template_directory_uri() . '/js/jssor.slider.mini.js');
}
add_action('init', 'include_jssor');

// primary navigation menu
register_nav_menu('primary', 'Primary Menu');
register_nav_menu('secondary', 'Secondary Menu');


// register side bars
register_sidebars(2, array('name'=>'Sidebar %d'));
?>
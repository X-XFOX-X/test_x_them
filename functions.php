<?php  // functions.php
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
});

// // add style in enqueue
// add_action("enqueue_style", "function_enqueue_style");
// function function_enqueue_style(){

//     wp_register_style("main_style", get_template_directory_uri() . "/assets/css/min.css");
//     wp_enqueue_style("main_style");
// }


// add_action("enqueue_script", "function_enqueue_script");

// // add script in enqueue
// function function_enqueue_script(){

//     wp_register_script("main_script", get_template_directory_uri() . "/assets/js/script.js", ["jquery", false]);
//     wp_enqueue_script("main_script");
// }

?>
<?php

function theme_name_scripts()
{
    // ======= CSS======
    // css flexslider    

    wp_enqueue_style('css-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
    // css standart 
    wp_enqueue_style('css-mystyle', get_stylesheet_uri());

    // ====== JS =========
    // js flexslider
    wp_enqueue_script('js-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', [], 1, true);
    wp_enqueue_script('js-script', get_template_directory_uri() . '/assets/js/script.js', [], 1, true);


    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/$examplejs', array($DEPENDENCY), '1.0.0', $TRUE_or_FAULSE );
}

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');

// add image size
add_image_size('slider', 1200, 700, true);

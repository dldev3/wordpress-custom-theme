<?php

function mc_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mc-styles', get_template_directory_uri().'/style.css', array('mc-bootstrap'), $version, 'all');
    wp_enqueue_style('mc-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style('mc-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'mc_register_styles' );


function mc_register_scripts(){
    wp_enqueue_script('mc-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "1.0",true);
    wp_enqueue_script('mc-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.0",true);
    wp_enqueue_script('mc-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "1.0" , true);
    wp_enqueue_script('mc-scripts',get_template_directory_uri().'/assets/js/main.js', array(), "1.0" ,true);
}

add_action('wp_enqueue_scripts', 'mc_register_scripts' );



?>
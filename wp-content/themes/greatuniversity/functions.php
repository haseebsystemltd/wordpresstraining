<?php


function greatuniversity_register_st_scrip(){
    wp_enqueue_style('indexCss', get_template_directory_uri().'/assets/build/index.css',[], '1.0', 'all');
    wp_enqueue_style('styleIndexCss', get_template_directory_uri().'/assets/build/style-index.css',[], '1.0', 'all');
    wp_enqueue_style('googleFonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i",[], '1.0', 'all');
    wp_enqueue_style('bootstrapCdn', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",[],  '1.0', 'all');

    wp_enqueue_script('indexScript', get_template_directory_uri()."/assets/build/index.js", [], '4.7.0', true);
    
}

add_action('wp_enqueue_scripts', 'greatuniversity_register_st_scrip');


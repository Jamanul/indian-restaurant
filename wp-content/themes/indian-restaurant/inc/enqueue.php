<?php

function ir_file_calling()
{
    wp_enqueue_style("ir_style", get_stylesheet_uri());
    wp_register_style("ir_main_style", get_template_directory_uri() . "/css/main.css", [], "1.0.0", "all");
    wp_enqueue_style("ir_main_style");
    wp_register_style("ir_bootstrap", get_template_directory_uri() . "/css/bootstrap.css", [], "5.2.2", "all");
    wp_enqueue_style("ir_bootstrap");
    wp_enqueue_script("jquery");
    wp_register_script("main.js", get_template_directory_uri() . "/js/main.js", [], "1.0.0", true);
}
add_action("wp_enqueue_scripts", "ir_file_calling");
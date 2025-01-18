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

function ir_add_google_fonts()
{
    wp_enqueue_style("ir_google_fonts", "https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Jomhuria&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap");
}
add_action("wp_enqueue_scripts", "ir_add_google_fonts");
<?php

include_once(get_template_directory() . "/inc/enqueue.php");
include_once(get_template_directory() . "/inc/menu_register.php");
include_once(get_template_directory() . "/inc/theme_functions.php");

function add_about_us_meta_boxes()
{
    global $post;

    // Check if it's a page and if the slug is 'about-us'
    if ($post && $post->post_type === 'page' && $post->post_name === 'about-us') {
        add_meta_box(
            'about_us_meta_box',          // Meta box ID
            'About Us Details',           // Title of the meta box
            'display_about_us_meta_box',  // Callback function to display fields
            'page',                       // Post type where this box should appear
            'normal',                     // Context (normal, side, etc.)
            'high'                        // Priority
        );
    }
}
add_action('add_meta_boxes', 'add_about_us_meta_boxes');

function display_about_us_meta_box($post)
{
    // Add a nonce field for security
    wp_nonce_field('save_about_us_meta', 'about_us_meta_nonce');

    // Retrieve existing meta values, if any
    $about_us_details = get_post_meta($post->ID, '_about_us_details', true);

    ?>
    <label for="about_us_details">Details:</label>
    <textarea name="about_us_details" id="about_us_details" rows="5"
        style="width:100%;"><?php echo esc_textarea($about_us_details); ?></textarea>
    <?php
}

function save_about_us_meta_box_data($post_id)
{
    // Verify the nonce
    if (!isset($_POST['about_us_meta_nonce']) || !wp_verify_nonce($_POST['about_us_meta_nonce'], 'save_about_us_meta')) {
        return;
    }

    // Check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Sanitize and save the data
    if (isset($_POST['about_us_details'])) {
        update_post_meta($post_id, '_about_us_details', sanitize_textarea_field($_POST['about_us_details']));
    }
}
add_action('save_post', 'save_about_us_meta_box_data');

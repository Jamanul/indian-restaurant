<?php
/*
Template Name: about-us Custom Template
*/
?>
<?php get_header(); ?>
<section class="hero-section vector-cotainer flex">
    <div class="hero-left">
        <img class="hero-img" src="./assets/images/about-hero.png" alt="Restaurant">
    </div>
    <div class="hero-right">
        <?php global $wpdb;

        // Get the ID of the "About Us" page by slug
        $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'about-us' AND post_type = 'page'");

        // Query the custom field value for the page
        $custom_field_value = $wpdb->get_var($wpdb->prepare(
            "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = %s",
            $page_id,
            'about-title'
        ));

        // Check if the custom field exists and display it
        if ($custom_field_value) {
            echo '<h1 class="hero-title">' . esc_html($custom_field_value) . '</h1>';
        } else {
            echo '<h1>No title available</h1>';
        }
        ?>
        <p class="hero-description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
            demonstrate the visual form of a document.</p>
    </div>

</section>
<?php get_footer() ?>
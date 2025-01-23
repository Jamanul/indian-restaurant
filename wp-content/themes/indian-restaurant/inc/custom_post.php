<?php
function custom_foods()
{
    register_post_type(
        "ir_foods",
        array(
            "labels" => array(
                "name" => __("foods", "sakib"),
                "singular_name" => "foods",
                "add_new" => "add new food",
                "edit_item" => "Edit food",
                "view_item" => "View food",
                "not_found" => "Sorry, no foods found.",
            ),
            "menu_icon" => "dashicons-carrot", // Corrected typo in icon
            "public" => true,
            "publicly_queryable" => true, // Fixed typo 'quarable'
            "exclude_from_search" => true,
            "menu_position" => 5,
            "has_archive" => true,
            "show_ui" => true,
            "taxonomies" => array(''), // No taxonomies by default
            "capability_type" => "post",
            "rewrite" => array("slug" => "service"),
            "supports" => array("title", "thumbnail", "editor"),
        )
    );
}
add_action("init", "custom_foods");

// Add theme support for post thumbnails
add_theme_support("post-thumbnails", array('post', 'page', 'service', 'ir_foods'));

// Add "Price" Meta Box
function add_price_meta_box()
{
    add_meta_box(
        'ir_foods_price_meta',
        'Food Price',
        'display_price_meta_box',
        'ir_foods',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_price_meta_box');

// Display the Meta Box
function display_price_meta_box($post)
{
    $price = get_post_meta($post->ID, 'ir_foods_price', true);
    ?>
    <label for="ir_foods_price">Price:</label>
    <input type="number" name="ir_foods_price" id="ir_foods_price" value="<?php echo esc_attr($price); ?>" step="0.01"
        min="0" style="width: 100%;" />
    <?php
}

// Save the Meta Box Data
function save_price_meta_box($post_id)
{
    if (array_key_exists('ir_foods_price', $_POST)) {
        update_post_meta($post_id, 'ir_foods_price', sanitize_text_field($_POST['ir_foods_price']));
    }
}
add_action('save_post', 'save_price_meta_box');

// Modify the query to include 'ir_foods' in category archives
function custom_food_category_post($query)
{
    if (is_category() && $query->is_main_query()) {
        $post_type = get_query_var('post_type');
        if (!$post_type) {
            $post_type = array("post", "ir_foods");
            $query->set('post_type', $post_type);
        }
    }
}
add_filter('pre_get_posts', 'custom_food_category_post');
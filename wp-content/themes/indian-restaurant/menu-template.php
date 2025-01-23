<?php
/*
Template Name: Menu Custom Template
*/
?>
<?php get_header(); ?>
<section class="menu-section-seconadary vector-cotainer">
    <h1 class="menu-title-secondary">
        Checkout Our Menu
    </h1>
    <p class="menu-description-secondary">
        In publishing and graphic design, Lorem ipsum is a placeholder text <span class="block-span">commonly used to
            demonstrate the visual form of a document.</span>
    </p>
    <div class="flex items-center justify-center">
        <div class="button-container">
            <button class="inactive-button">Breakfast</button>
            <button class="active-button">Lunch</button>
            <button class="inactive-button">Dinner</button>
            <button class="inactive-button">Starters</button>
            <button class="inactive-button responsive-col-span ">Dessert</button>
        </div>
    </div>
    <!-- card section -->
</section>
<section class="vector-cotainer">
    <div class="card-container">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'ir_foods',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'order' => 'ASC',
            'paged' => $paged,
        );

        $ir_foods_query = new WP_Query($args);

        if ($ir_foods_query->have_posts()):
            while ($ir_foods_query->have_posts()):
                $ir_foods_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="food-item">
                        <?php
                        if (has_post_thumbnail()) {
                            echo get_the_post_thumbnail(get_the_ID(), 'ir_foods', array('class' => 'img-responsive'));
                        }
                        ?>
                        <h2 class="card-title"><?php echo esc_html(get_the_title()); ?></h2>
                        <p class="card-description"><?php echo esc_html(get_the_excerpt()); ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="399" height="2" viewBox="0 0 399 2" fill="none">
                            <path d="M1 1H398" stroke="#6C6C6C" stroke-width="0.5" stroke-linecap="round" />
                        </svg>
                        <div class="price-container">
                            <p class="learn-more">Learn more</p>
                            <p class="menu-price">
                                <?php
                                $price = get_post_meta(get_the_ID(), 'ir_foods_price', true);
                                if ($price) {
                                    echo esc_html($price);
                                }
                                ?>
                                $
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php
        else:
            echo '<p>No posts found.</p>';
        endif;

        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
    <div class="see-more">
        <button class="inactive-button">See More</button>
    </div>
</section>
<!-- newsletter section -->
<section class="newsletter">
    <div class="newsletter-container vector-cotainer flex">
        <div class="img-border">
            <img class="newsletter-img" src="<?php echo get_template_directory_uri(); ?>./images/image 19.png"
                alt="person">
        </div>
        <div class="">
            <div class="yellow-container">
                <p class="newsletter-yellow">Newsletter </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="102" height="1" viewBox="0 0 102 1" fill="none">
                    <path d="M1 0.5H101" stroke="#FF8A01" stroke-linecap="round" />
                </svg>
            </div>
            <h1 class="newsletter-title">Subscribe Newsletter & get Latest Offer!</h1>
            <p class="newsletter-description">In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used to demonstrate the visual form of a document.</p>
            <div class="newsletter-input-section">
                <input class="newsletter-input" type="text" placeholder="Write your Email">
                <button class="newsletter-button">Subscribe</button>
            </div>
        </div>

    </div>
</section>
<?php get_footer() ?>
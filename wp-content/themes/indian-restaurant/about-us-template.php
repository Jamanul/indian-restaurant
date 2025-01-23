<?php
/*
Template Name: about-us Custom Template
*/
?>
<?php get_header(); ?>
<section class="hero-section vector-cotainer flex">
    <div class="hero-left">
        <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>./images/about-hero.png" alt="Restaurant">
    </div>
    <div class="hero-right">
        <h2 class="hero-title">We Are A Indian Restaurant make Delicious Recipe For Foodie people.</h2>
        <p class="hero-description">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
            demonstrate the visual form of a document.</p>
    </div>
</section>

<!-- first-restaurent -->
<section class="hero-section vector-cotainer flex items-center">
    <div class="hero-right flex flex-column justify-center items-center">
        <h2 class="hero-title playfair-display font-bold">The Story of Our First Restaurant Branch</h2>
        <p class="hero-description text-lg">In publishing and graphic design, Lorem ipsum is a placeholder text commonly
            used to demonstrate the visual form of a document.</p>
    </div>
    <div>
        <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>./images/image 20.png" alt="interior">
    </div>
</section>
<!-- mission-section -->
<section class="mission-section vector-cotainer ">
    <h1 class="mission-title">Our Vision & Mission</h1>
    <p class="mission-description"> In publishing and graphic design, Lorem ipsum is a placeholder text <span
            class="block-span">commonly used to demonstrate the visual form of a document.</span></p>
    <div class="mission-div">
        <div class="mission-div-left">
            <div class="mission-div-inner">
                <div class="mission-div-inner-left">
                    <div class="img-holder">
                        <img class="img-padding" src="<?php echo get_template_directory_uri(); ?>./images/icon.png"
                            alt="burger">
                    </div>
                </div>
                <div>
                    <h2 class="icon-title">Delicious Cuisine</h2>
                    <p class="icon-description">In publishing and graphic design, Lorem ipsum is a placeholder text
                        commonly used.</p>
                </div>
            </div>
            <div class="mission-div-inner">
                <div class="mission-div-inner-left">
                    <div class="img-holder">
                        <img class="img-padding" src="<?php echo get_template_directory_uri(); ?>./images/icon.png"
                            alt="burger">
                    </div>
                </div>
                <div>
                    <h2 class="icon-title">Fast Delivery</h2>
                    <p class="icon-description">In publishing and graphic design, Lorem ipsum is a placeholder text
                        commonly used.</p>
                </div>
            </div>
            <div class="mission-div-inner">
                <div class="mission-div-inner-left">
                    <div class="img-holder">
                        <img class="img-padding" src="<?php echo get_template_directory_uri(); ?>./images/icon.png"
                            alt="burger">
                    </div>
                </div>
                <div>
                    <h2 class="icon-title">Professional Chef</h2>
                    <p class="icon-description">In publishing and graphic design, Lorem ipsum is a placeholder text
                        commonly used.</p>
                </div>
            </div>

        </div>
        <div>
            <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>./images/mission.png" alt="person">
        </div>
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
<?php

?>

<?php get_header(); ?>
<!-- cover section -->
<section style="background: linear-gradient(
    88deg,
    rgba(0, 0, 0, 0.66) 16.03%,
    rgba(0, 0, 0, 0.51) 41.34%,
    rgba(0, 0, 0, 0) 56.85%
    ),
    url('<?php echo get_theme_mod("ir_cover_area_img"); ?>') lightgray 50% / cover no-repeat;" class="cover-section">
    <div class="vector-cotainer relative">
        <div class="flex items-center cover-text">
            <p class="text-lg playfair-display">A Indian Cuisine Restaurant</p>
            <img src="<?php echo get_template_directory_uri(); ?>./icons/yellow-svg.svg" alt="line">
        </div>
        <div class="flex-column flex cover-bottom">
            <div class="flex flex-column cover-center">
                <h1 class="cover-title playfair-display">Healthy And Fresh <span class="block-span">Food In One
                        Place</span></h1>
                <p class="text-lg cover-dsc">In publishing and graphic design, Lorem ipsum is a placeholder <span
                        class="cover-span">text commonly used to demonstrate the visual form of a document.</span>
                </p>
            </div>
            <div class="flex items-center button-container">
                <button class="hero-button text-lg primary-bg text-center">See Menu</button>
                <button class="flex search-button text-lg primary-bg text-center"><img class="relative z-100"
                        src="<?php echo get_template_directory_uri(); ?>./icons/Search.svg" alt="search"><span
                        class="relative z-100"> Search</span>
                </button>
            </div>
            <!-- <div class="button-container">
            <button class="hover-button">
              Hover Me
              <img src="<?php echo get_template_directory_uri(); ?>./icons/wheel.svg" alt="wheel" class="wheel">
            </button>
          </div> -->
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>./icons/white-mouse.svg" alt="mouse"
            class="absolute cover-svg">
    </div>

</section>
<!-- hero section -->
<section class="hero-section ">
    <div class="hero vector-cotainer">
        <!-- title -->
        <div class="relative">
            <h1 class="playfair-display hero-title font-bold">
                Healthy And Fresh Food <span class="block-span"> In One Place</span>
            </h1>
            <img class="hero-pizza absolute" src="<?php echo get_template_directory_uri(); ?>./images/pizza.png"
                alt="pizza" />
        </div>
        <div class="hero-div flex">
            <!-- hero left -->
            <div class="image-container">
                <img class="hero-div-img" src="<?php echo get_theme_mod("ir_hero_img"); ?>" alt="Restaurant" />
            </div>
            <!--  hero-right-->
            <div class="hero-inner-div">
                <p class="hero-div-title satisfy-regular">
                    A Indian Cuisine Restaurant
                </p>
                <p class="hero-div-description">
                    In publishing and graphic design, Lorem ipsum is a place holder
                    text commonly used to demonstrate the visual form of a document.
                </p>
                <div class="button-container flex">
                    <button class="hero-button text-lg primary-bg text-center">See Menu</button>
                    <button class="hero-button-two text-lg text-center">Book a Table</button>
                </div>
                <div class="hero-last flex">
                    <div class="hero-last-div flex items-center">
                        <h2 class="lora-font hero-last-text">4.5K+</h2>
                        <p class="hero-last-review">
                            Reviews <span class="block-span"> of Customer</span>
                        </p>
                    </div>
                    <div class="hero-last-div-two flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>./images/Ellipse 11.png" alt="Person"
                            class="responsive-width" />
                        <p class="hero-last-div-two-text">demonstrate the visual <span> form of a document.</span>
                        </p>
                    </div>
                </div>
                <div class="hero-pizza">
                    <img src="<?php echo get_template_directory_uri(); ?>./icons/mouse-icon.svg" alt="mouse">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- best food -->
<section class="best-food flex flex-column items-center justify-center vector-cotainer">
    <div class="best-food-section flex">
        <!-- best food left section -->
        <div>
            <p class="hero-div-title show-class satisfy-regular">
                A Indian Cuisine Restaurant
            </p>
            <h2 class="best-food-title playfair-display font-bold">
                We are the best in this food town for a decade!
            </h2>

            <img class="best-food-img" src="<?php echo get_template_directory_uri(); ?>./images/image 38.png"
                alt="chicken" />

            <p class="best-food-secondary-title font-bold playfair-display">Spicy Club</p>
            <p class="best-food-description text-lg">
                In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used Lorem ipsum text only.
            </p>
        </div>
        <!-- best food right section -->
        <div>
            <img class="best-food-img" src="<?php echo get_template_directory_uri(); ?>./images/image 39.png"
                alt="curry" />
            <p class="best-food-secondary-title font-bold playfair-display">Spicy Club</p>
            <p class="best-food-description">
                In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used Lorem ipsum text only.
            </p>
        </div>
    </div>
    <button class="about-us text-center text-lg primary-bg">About Us</button>
</section>
<section class="daily-offer vector-cotainer">
    <!-- top buttons -->
    <div class=" justify-between items-center flex">
        <p class="daily-offer-title playfair-display text-center font-bold">Our Daily Offer</p>
        <div>
            <button class="daily-offer-button">
                <img src="<?php echo get_template_directory_uri(); ?>./icons/left-arrow.svg" alt="left">
            </button>
            <button class="daily-offer-button">
                <img src="<?php echo get_template_directory_uri(); ?>./icons/right-arrow.svg" alt="right">
            </button>
        </div>
    </div>
    <!-- main section -->
    <div class="daily-offer-div flex items-center">
        <!-- left side menu image -->
        <div class="daily-offer-image-container">
            <div class="daily-offer-image-div flex flex-column justify-between">
                <div>
                    <h2 class="daily-offer-first-title text-center playfair-display">Lunch Time</h2>
                    <h3 class="daily-offer-second-title">30% OFF</h3>
                </div>
                <div>
                    <button class="reservation-button primary-bg text-lg text-center">Make Reservation</button>
                </div>
            </div>
            <img class="daily-offer-svg" src="<?php echo get_template_directory_uri(); ?>./icons/arrow-svg.svg"
                alt="arrow">
        </div>
        <!-- right side menu -->
        <div class="menu flex flex-column justify-between">
            <div class="menu-section flex">
                <div><img src="<?php echo get_template_directory_uri(); ?>./images/image 21.png" alt="chicken"
                        class="menu-section-img" /></div>
                <div class="menu-price flex flex-column">
                    <div class="menu-left flex justify-between">
                        <p class="menu-title playfair-display font-bold">Spicy Club</p>
                        <p class="menu-title font-bold">₹ 299</p>
                    </div>
                    <p class="menu-description">
                        In publishing and graphic design, Lorem <br />
                        ipsum is a placeholder text commonly used.
                    </p>
                </div>
            </div>
            <div class="menu-section flex">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>./images/image 22.png" alt="pizza"
                        class="menu-section-img" />
                </div>
                <div class="menu-price flex flex-column">
                    <div class="menu-left flex justify-between">
                        <p class="menu-title playfair-display font-bold">Almond Baked Brie</p>
                        <p class="menu-title font-bold">₹ 299</p>
                    </div>
                    <p class="menu-description">
                        In publishing and graphic design, Lorem <br />
                        ipsum is a placeholder text commonly used.
                    </p>
                </div>
            </div>
            <div class="menu-section flex">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>./images/image 23.png" alt="pizza"
                        class="menu-section-img" />
                </div>
                <div class="menu-price flex flex-column">
                    <div class="menu-left flex justify-between">
                        <p class="menu-title playfair-display font-bold">Tuescan Flatbread</p>
                        <p class="menu-title font-bold">₹ 299</p>
                    </div>
                    <p class="menu-description">
                        In publishing and graphic design, Lorem <br />
                        ipsum is a placeholder text commonly used.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reservation -->
<section class="online-reservation">
    <h1 class="reservation-title vector-cotainer">Online Reservation</h1>
    <div class="vector-cotainer">
        <!-- input fields -->
        <div class="reservation-input-container">
            <div class="input-div">
                <input type="text" placeholder="Your name" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/person.svg" alt="person"
                    class="input-div-icons">
            </div>
            <div class="input-div">
                <input type="number" placeholder="Phone Number" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/phone.svg" alt="phone"
                    class="input-div-icons">
            </div>
            <div class="input-div">
                <input type="email" placeholder="Email Address" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/email.svg" alt="email"
                    class="input-div-icons">
            </div>
            <div class="input-div">
                <input type="text" placeholder="2 Person" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/down-arrow.svg" alt="down-arrow"
                    class="input-div-icons">
            </div>
            <div class="input-div">
                <input type="date" placeholder="" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/calender.svg" alt="calender"
                    class="input-div-icons">
            </div>
            <div class="input-div">
                <input type="text" placeholder="07:00 PM - 10:00 PM" />
                <img src="<?php echo get_template_directory_uri(); ?>./icons/clock.svg" alt="clock"
                    class="input-div-icons">
            </div>
        </div>
        <div class="submit-button-container flex items-center justify-center">
            <button class="submit-button primary-bg text-lg">Submit Your Reservation</button>
        </div>
    </div>
</section>
<!-- contact info -->
<section class="contact-container vector-cotainer">
    <div class="contact-info flex justify-between">
        <div class="contact-info-section flex">
            <div>
                <div class="contact-svg">
                    <img src="<?php echo get_template_directory_uri(); ?>./icons/business.svg" alt="clock"
                        class="contact-svg-img">
                </div>
            </div>
            <div>
                <h2 class="contact-title font-bold playfair-display">Business Hours</h2>
                <p class="contact-time">
                    Sat - Sun: <span class="cotact-time-number">10 AM - 11 PM</span>
                </p>
                <p class="contact-time-two">
                    Mon - Fri: <span class="cotact-time-number">10 AM - 8 PM</span>
                </p>
            </div>
        </div>
        <div class="contact-info-section flex">
            <div>
                <div class="contact-svg">
                    <img src="<?php echo get_template_directory_uri(); ?>./icons/location.svg" alt="home"
                        class="contact-svg-img">
                </div>
            </div>
            <div>
                <h2 class="contact-title playfair-display font-bold">Locations</h2>
                <div class="location-div-container">
                    <p class="contact-time">Sat - Sun:</p>
                    <p class="location-text">
                        Shere hydrabad <br />
                        Nagar, Dilli, India
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-info-section flex">
            <div>
                <div class="contact-svg">
                    <img src="<?php echo get_template_directory_uri(); ?>./icons/contact.svg" alt="phone"
                        class="contact-svg-img">
                </div>
            </div>
            <div>
                <h2 class="contact-title font-bold playfair-display">Contact</h2>
                <p class="contact-time">
                    Email:
                    <span class="cotact-time-number">Restaurant@gmail.com</span>
                </p>
                <p class="contact-time-two">
                    Phone <span class="cotact-time-number">+8673453463523</span>
                </p>
            </div>
        </div>
    </div>
    <div class="contact-img-container">
        <img class="contact-img" src="<?php echo get_template_directory_uri(); ?>./images/image 40.png" alt="map" />
    </div>
</section>
<!-- Newsletter section -->
<section class="newsletter flex vector-cotainer">
    <!--newsletter left -->
    <div class="newsletter-top">
        <p class="newsletter-title-responsive">Newsletter</p>
        <p class="hero-div-title satisfy-regular newsletter-first-div">
            A Indian Cuisine Restaurant
        </p>
        <h1 class="newsletter-title playfair-display font-bold">
            Subscribe Newsletter & get Latest Offer!
        </h1>
        <p class="newsletter-description text-lg">
            In publishing and graphic design, Lorem ipsum is a placeholder text
            commonly used to demonstrate the visual form of a document.
        </p>
        <div class="newsletter-input-section flex items-center">
            <input class="newsletter-input" type="text" placeholder="Write your Email" />
            <button type="submit" class="newsletter-button text-center primary-bg text-lg">Subscribe</button>
        </div>
    </div>
    <!-- newsletter right -->
    <div class="img-border">
        <img src="<?php echo get_template_directory_uri(); ?>./images/image 19.png" alt="Restaurant"
            class="img-border-img" />
    </div>
</section>
<?php get_footer() ?>
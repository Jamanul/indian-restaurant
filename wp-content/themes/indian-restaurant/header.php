<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian restaurant</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="nav-container flex">
            <div class="nav-first items-center flex vector-cotainer">
                <h2 class="logo jomhuria-regular"><a href="<?php echo home_url(); ?>">Logo</a></h2>
                <?php wp_nav_menu(array("theme_location" => "main_menu", "menu_id" => "nav")) ?>
                <div class="nav-right flex">
                    <button class="nav-button">
                        <img src="<?php echo get_template_directory_uri(); ?>./icons/bar-icon.svg" alt="menu">
                    </button>
                    <button class="responsive-nav-button items-center flex-column justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="2" viewBox="0 0 11 2" fill="none">
                            <path d="M0.631592 1H10.2358" stroke="black" stroke-width="1.20053"
                                stroke-linecap="round" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="2" viewBox="0 0 9 2" fill="none">
                            <path d="M0.832031 0.601562H8.03521" stroke="black" stroke-width="1.20053"
                                stroke-linecap="round" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="2" viewBox="0 0 7 2" fill="none">
                            <path d="M1.03271 1.20312H5.83484" stroke="black" stroke-width="1.20053"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                    <button class="reserve-button flex items-center justify-center text-center primary-bg">
                        Reserve Table
                    </button>
                </div>
            </div>
        </nav>
        <div class="nav-title primary-bg text-center">
            <p class="vector-cotainer nav-text">
                Join My Restaurant Rewards, win Our Special
                <span class="nav-title-span">Guest Token!</span>
            </p>
        </div>
    </header>
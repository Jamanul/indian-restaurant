<footer class="footer">
    <div class="footer-container flex justify-between vector-cotainer">
        <div class="footer-left">
            <h2 class="footer-logo">Logo</h2>
            <p class="footer-description">
                In publishing and graphic design, Lorem <br />
                ipsum is a placeholder text commonly
            </p>
            <ul class="footer-bottom">
                <li>Home</li>
                <li>Menu</li>
                <li>Offer</li>
                <li>Services</li>
                <li>Help</li>
                <li>Privacy</li>
            </ul>
        </div>
        <div class="logo-container-footer-conatiner">
            <p class="get-app">Get the app</p>
            <div class="logo-container-footer">
                <img src="<?php echo get_template_directory_uri(); ?>./icons/app-store.svg" alt="app-store">
            </div>
            <div class="logo-container-footer">
                <div class="svg-holder">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>./icons/play-button.svg" alt="play-button">
                    </div>
                    <div class="svg-flex flex flex-column">
                        <img style="width: fit-content;"
                            src="<?php echo get_template_directory_uri(); ?>./icons/store.svg" alt="store">
                        <img src="<?php echo get_template_directory_uri(); ?>./icons/google-text.svg" alt="store">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="disclaimer-footer vector-cotainer flex justify-between items-center">
        <p class="disclaimer">© 2077 Untitled UI. All rights reserved.</p>
        <div class="disclaimer-icon">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/twitter.svg" alt="twitter">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/linkedin.svg" alt="linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/facebook.svg" alt="facebook">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/githu.svg" alt="github">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/v.svg" alt="v">
            <img src="<?php echo get_template_directory_uri(); ?>./icons/balls.svg" alt="balls">
        </div>
    </div>
</footer>
<script>
    // const btn = document.querySelector('.search-button'); // Match the correct class name

    // btn.addEventListener('mousemove', function (e) {
    //     const rect = btn.getBoundingClientRect();
    //     const x = e.clientX - rect.left;
    //     const y = e.clientY - rect.top;
    //     btn.style.setProperty('--x', x + 'px');
    //     btn.style.setProperty('--y', y + 'px');
    // });
</script>
<?php wp_footer(); ?>
</body>

</html>
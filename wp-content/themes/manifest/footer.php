<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Sector_Website_Modal
 */

?>

<?php wp_footer(); ?>

    <!-- Footer section start -->
    <div class="footer">
    <p> &copy; 2015 Website by Team MF1123</p>
    </div>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->
    <div class="scrollup">
    <a href="#">
    <i class="icon-up-open"></i>
    </a>
    </div>
    <!-- ScrollUp button end -->
    <!-- Include javascript -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.inview.js"></script>
    <!-- Load google maps api and call initializeMap function defined in app.js -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
    <!-- css3-mediaqueries.js for IE8 or older -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>

</body>
</html>

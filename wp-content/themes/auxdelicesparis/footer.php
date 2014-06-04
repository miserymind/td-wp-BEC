<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

    <footer>
        <div class="containerFooter">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    => 'footer',
                                'menu_class'        => 'nav',
                                'container'         => false,
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!-- JavaScript : Activation Less & Bootstrap -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
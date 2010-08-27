<?php
/**
 * Plugin Name: Twentyten IE6 Menus
 * Author: Sara Cannon
 * Author URI: http://sara-cannon.com
 * Description: Make the menu drop down in IE6 (if you care about that sort of thing)
 * Version: 1.0
 * License: GPL2
 */
function sara_twentyten_ie6_menus_enqueue() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'after_setup_theme', 'sara_twentyten_ie6_menus_enqueue' );

function sara_twentyten_ie6_menus_script() {
?>
<!--[if lte IE 6]>
<script type="text/javascript">
jQuery(document).ready( function($) {
    $('#access li').mouseover( function() {
        $(this).find('ul').show();
    });
    $('#access li').mouseleave( function() {
        $(this).find('ul').hide();
    });
    $('#access li ul').mouseleave( function() {
        $(this).hide();
    });
});
</script>
<![endif]-->
<?php
}
add_action( 'wp_footer', 'sara_twentyten_ie6_menus_script' ); 
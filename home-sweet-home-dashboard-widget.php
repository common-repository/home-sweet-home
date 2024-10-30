<?php
    
    /*
     Plugin Name: Home Sweet Home
     Plugin URI: http://www.pavilionrc.com/home-sweet-home-plugin/
     Description: Easy-to-find Home page link for Dashboard
     Author: Mark Ciotola
     Version: 1.1
     Author URI: http://www.pavilionrc.com/mark-ciotola/
     License: GPL v2 or later
     License URI: https://www.gnu.org/licenses/gpl-2.0.html
     */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Function that outputs the home page link into  panel on the Dashboard
function homesweethome( $post, $callback_args ) {

?>
        
<em>Lost? To get to the site home page, simply click the following</em>:

<ul>
    <li><a href="<?php echo esc_url( get_home_url() ); ?>" >Site Home Page</a></li>
</ul>


<?php

}

// Show Home Sweet Home dashboard widget
    // Function used in the action hook
    function hshome_dashboard_widget() {
        wp_add_dashboard_widget('homesweethome_dashboard_widget', 'Home Page Finder', 'homesweethome');
    }
    // Register the new dashboard widget with the 'wp_dashboard_setup' action
    add_action('wp_dashboard_setup', 'hshome_dashboard_widget' );

?>

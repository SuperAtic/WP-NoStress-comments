<?php
/*
Plugin Name: WP NoStress Comments
Description: Replaces the default WordPress comments with the NOSTR comment form using the nocomment library.
Version: 1.0
Author: Your Name
*/

// Ensure the script doesn't get called outside of WordPress.
defined('ABSPATH') or die('No script kiddies please!');

// Disable WordPress default comments everywhere when the plugin is activated.
function wp_nostress_activate() {
    update_option('default_comment_status', 'closed');
}
register_activation_hook(__FILE__, 'wp_nostress_activate');

// Enqueue the nocomment library scripts, styles, and custom assets.
function wp_nostress_enqueue_scripts() {
    // Enqueue the nocomment library script.
    // wp_enqueue_script('nocomment-js', 'assets/js/embed.js', array(), '1.0.0', true);
    wp_enqueue_script('nocomment-js', 'https://nocomment.pages.dev/embed.js', array(), '1.0.0', true);
    
    // Enqueue custom CSS and JS for the plugin.
    wp_enqueue_style('wp-nostress-css', plugin_dir_url(__FILE__) . 'assets/css/style.css', array(), '1.0.0');
    wp_enqueue_script('wp-nostress-js', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('nocomment-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wp_nostress_enqueue_scripts');

// Replace the default WordPress comments template with the NOSTR comment form.
function wp_nostress_comment_form($file) {
    if(is_singular() && comments_open() && get_option('thread_comments')) {
        // The div where the NOSTR comment form will be initialized.
        echo '<div id="wp-nostress-comments"></div>';
    }
    return; // Return nothing to ensure the default WP comments don't appear.
}
add_filter('comments_template', 'wp_nostress_comment_form');

?>

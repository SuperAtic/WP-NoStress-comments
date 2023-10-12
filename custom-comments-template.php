function wp_nostress_comment_form($file) {
    // Check if comments are open and if threaded comments are enabled.
    if(is_singular() && comments_open() && get_option('thread_comments')) {
        // The div where the NOSTR comment form will be initialized.
        echo '<div id="wp-nostress-comments"></div>';
        echo '<script>
            // Initialize the NOSTR comment form.
            NoComment.init({
                target: document.getElementById("wp-nostress-comments"),
                // Other initialization parameters...
            });
        </script>';
        // Return our custom comment form to override the default one.
        return dirname(__FILE__) . '/custom-comments-template.php';
    }
    return $file;
}
add_filter('comments_template', 'wp_nostress_comment_form', 99); // Use a high priority to ensure our filter runs last.

// Initialize the NOSTR comment form.
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('wp-nostress-comments')) {
        NoComment.init({
            target: document.getElementById('wp-nostress-comments'),
            // Other initialization parameters...
        });
    }
});

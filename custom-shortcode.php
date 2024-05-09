<?php
function subscribe_link() {
    return 'Follow us on <a rel="nofollow href="https://twitter.com/Hostinger?s=20">Twitter</a>'; 
}
add_shortcode('subscribe', 'subscribe_link');
?>
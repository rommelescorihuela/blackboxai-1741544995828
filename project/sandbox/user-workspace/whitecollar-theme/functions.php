<?php
function whitecollar_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'whitecollar_theme_setup');
?>

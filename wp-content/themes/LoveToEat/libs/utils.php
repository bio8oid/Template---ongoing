<?php

// define('LOVETOEAT_THEME_DIR', ABSPATH. 'wp-content/themes/'.get_template().'/');
if(!defined('LOVETOEAT_THEME_DIR')) {
    define('LOVETOEAT_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

if(!defined('LOVETOEAT_THEME_URL')) {
    define('LOVETOEAT_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

?>
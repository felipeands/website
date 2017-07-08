<?php
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_theme_support( 'post-thumbnails' );
add_image_size('job-thumbnail', 368, 276, array('center', 'top'));

define('ALLOW_UNFILTERED_UPLOADS', true);
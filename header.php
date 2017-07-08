<!doctype html>
<html>
  <head>
    <title><?php echo bloginfo('site_name'); ?></title>
    <meta charset="utf8">
    <meta description="<?php bloginfo('site_description'); ?>">
    
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_url'); ?>/assets/css/main.css" rel="stylesheet" type="text/css">
  </head>
  <body <?php body_class(); ?>>
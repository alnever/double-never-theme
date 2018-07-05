<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- meta tags -->
        <meta charset="<?php _e(bloginfo('charset')); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Alex Neverov" />
        <meta name="description" content="Simpe Worpress Theme for a Personal Blog" />

        <!-- styles -->
        <link rel="stylesheet" id="main-style-sheet" href="<?php _e(bloginfo('stylesheet_url')); ?>" type="text/css" media="all" />
        <link rel="stylesheet" id="mobile-style-sheet" href="<?php _e(bloginfo('template_url')); ?>/css/mobile.css" type="text/css" media="screen and (max-width:600px)" />
        
        <!-- title -->
        <title><?php _e(strip_tags(get_the_title()), 'double-never-theme'); ?><?php _e(bloginfo('name'), 'double-never-theme'); ?></title>

        <!-- wp_head hook -->
        <?php wp_head(); ?>

        <!-- scripts -->
        <script id="simple-never-script" src="<?php _e(bloginfo('template_url')); ?>/js/double-never-theme.js"></script>
    </head>
<body> <!-- must be closed in footer.php -->
    <div class="wrapper"> <!-- must be closed in footer.php -->
        <!-- page header -->
        <div class="header">
            <div class="title">
                <a href="<?php _e(bloginfo('wpurl')); ?>" title="<?php _e(bloginfo('title'), 'double-never-theme'); ?>">
                    <?php _e(bloginfo('title'), 'double-never-theme'); ?>
                </a>
            </div>
            <div class="description">
                <?php _e(bloginfo('description'), 'double-never-theme'); ?>
            </div>
        </div>
        <div class="header_menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <div class="mobile_header_menu">
            <span class="mobile_menu_start">
                &equiv;&nbsp;<?php _e("Menu",'double-never-theme'); ?>
            </span>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        

        
        
    




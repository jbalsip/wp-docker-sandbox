<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Template for Bootstrap</title>

        <!-- Custom styles for this template -->
         <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"> 
<!--        <link rel="stylesheet" type="text/css" href="style.css">-->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        
        <?php wp_head();?>
    </head>
    
    <body <?php body_class(); ?>>
    <div class="nav-background">
        &nbsp;
    </div>
    <div id="page">
        <div class="menu-container">
            <nav class="topnav" id="myTopnav">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu'));?>
                <ul>
                    <li><a class="icon" id="click"><i class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
            <div class="social-menu">
                <ul>
                    <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#googleplus"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#rss"><i class="fas fa-rss"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="blog-header">
            <h1 class="blog-title">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
            <p class="blog-description"><?php echo get_bloginfo('description'); ?></p>
        </div>


<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            <?php if(is_front_page() || is_home()){
                echo get_bloginfo('name');
            } else{
                echo wp_title('');
            }?>
        </title>

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
                <?php
                    function outputSocialMedia($setting_name, $base_url, $class_name) {
                        $setting_value = get_theme_mod( $setting_name );

                        if ($setting_value != '') {
                            $target_url = $base_url . $setting_value;
                            ?>
                            <li><a href="<?php echo $target_url ?>"><i class="<?php echo $class_name ?>"></i></a></li>
                            <?php                            
                        }
                    }
                    outputSocialMedia( 'kapi_social_facebook_id', 'https://www.facebook.com/', 'fab fa-facebook-f' );
                    outputSocialMedia( 'kapi_social_pinterest_id', 'https://www.pinterest.com/', 'fab fa-pinterest-p' );
                    outputSocialMedia( 'kapi_social_twitter_id', 'https://twitter.com/', 'fab fa-twitter' );
                    outputSocialMedia( 'kapi_social_instagram_id', 'https://www.instagram.com/', 'fab fa-instagram' );
                    outputSocialMedia( 'kapi_social_google_id', 'https://plus.google.com/', 'fab fa-google-plus' );

                    if (get_theme_mod( 'kapi_social_show_rss' ) == true) {
                        ?>
                        <li><a href="<?php bloginfo('rss2_url'); ?>"><i class="fas fa-rss"></i></a></li>
                    <?php }
                ?>
                    <li><a href="#rss"><i class="fas fa-rss"></i></a></li>
                    <li><a href="#rss"><i class="fas fa-search"></i></a></li>
                    <li><button class="button1" id="show-search-modal" data-uk-toggle="target: #search-modal" type="button">
                        <span><i class="fas fa-search"></i></span>
                    </button></li>
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


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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
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
            <button type="button" class="icon" id="click"><i class="fas fa-bars"></i></button>
            </nav>
            <div class="social-menu">
                <ul>
                <?php
                    function outputSocialMedia($setting_name, $base_url, $class_name) {
                        $setting_value = get_theme_mod( $setting_name );

                        if ($setting_value != '') {
                            $target_url = $base_url . $setting_value;
                            ?>
                            <li><a href="<?php echo $target_url ?>" target="_blank"><i class="<?php echo $class_name ?>"></i></a></li>
                            <?php                            
                        }
                    }
                    outputSocialMedia( 'kapi_social_facebook_id', 'https://www.facebook.com/', 'fab fa-facebook-f' );
                    outputSocialMedia( 'kapi_social_pinterest_id', 'https://www.pinterest.com/', 'fab fa-pinterest-p' );
                    outputSocialMedia( 'kapi_social_twitter_id', 'https://twitter.com/', 'fab fa-twitter' );
                    outputSocialMedia( 'kapi_social_instagram_id', 'https://www.instagram.com/', 'fab fa-instagram' );
                    outputSocialMedia( 'kapi_social_github_id', 'https://github.com/', 'fab fa-github' );
                    

                    if (get_theme_mod( 'kapi_social_show_rss' ) == true) {
                        ?>
                        <li><a href="<?php bloginfo('rss2_url'); ?>"><i class="fas fa-rss"></i></a></li>
                    <?php }
                ?>
                    <li><div class="searchbtn" id="search-button" type="button">
                        <span><i class="fas fa-search"></i></span>
                    </div></li>
                </ul>
            </div>



<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"><i class="fas fa-times"></i></span>
    <div class="searchbox">
        <form method="get" class="searchform s-modal" action="<?php echo esc_url( home_url('/') ); ?>">
            <div>
	            <input type="text" placeholder="Search..." name="s" class="searchfield" value="" />
	            <button type="submit" class="searchsubmit s-modal">
	            <i class="fas fa-search"></i>
	            </button>
            </div>	
        </form>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("search-button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


        </div>

        <div class="blog-header">
            <h1 class="blog-title">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
            <p class="blog-description"><?php echo get_bloginfo('description'); ?></p>
        </div>


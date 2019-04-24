<?php
    add_theme_support( 'post-thumbnails' );

    function archive_navi_template($template){
	$template = '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>';
	return $template;
    }
    add_action( 'navigation_markup_template', 'archive_navi_template' );

    function my_excerpt_length($length) {
        return 20;
    }
    add_filter('excerpt_length', 'my_excerpt_length');

    function my_excerpt_more($more) {
    return '…';
    }
    add_filter('excerpt_more', 'my_excerpt_more');

    add_filter( 'the_content', 'img_p_class_content_filter' ,20);
    function img_p_class_content_filter($content) {
        // assuming you have created a page/post entitled 'debug'
        $content = preg_replace("/(<p[^>]*)(\>.*)(\<img.*)(<\/p>)/im", "\$1 class='content-img-wrap'\$2\$3\$4", $content);

        return $content;
    }

    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    function widgetarea_init() {
    register_sidebar(array(
        'name'=>'side-content',
        'id' => 'side-widget',
        'before_widget'=>'<div id="%1$s" class="%2$s side-contents-container"><div class="side-content">',
        'after_widget'=>'</div></div>',
        'before_title' => '<h2 class="sidebar-title">',
        'after_title' => '</h2>'
    ));
    }
    add_action( 'widgets_init', 'widgetarea_init' );

    add_action( 'customize_register', 'kapi_theme_customize_register' );
    function kapi_theme_customize_register($wp_customize) {
        $wp_customize->add_section('social_section', array(
            'title'          => 'Social Networks'
        ));
    

        add_social_network( $wp_customize, 'kapi_social_facebook_id', 'Facebook ID');
        add_social_network( $wp_customize, 'kapi_social_pinterest_id', 'Pinterest ID');
        add_social_network( $wp_customize, 'kapi_social_twitter_id', 'Twitter ID');
        add_social_network( $wp_customize, 'kapi_social_instagram_id', 'Instagram ID');
        add_social_network( $wp_customize, 'kapi_social_google_id', 'Google+ ID');
        add_social_network( $wp_customize, 'kapi_social_github_id', 'GitHub ID');
        

        $wp_customize->add_setting( 'kapi_social_show_rss', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'themeslug_sanitize_checkbox',
          ) );
          
          $wp_customize->add_control( 'kapi_social_show_rss', array(
            'type' => 'checkbox',
            'section' => 'social_section', // Add a default or your own section
            'label' => __( 'Show RSS' ),
            'description' => __( 'Shows or hides the RSS feed icon in the navigation menu' ),
          ) );
     }

     function add_social_network($wp_customize, $setting_name, $setting_label) {
        $wp_customize->add_setting($setting_name, array(
            'default'        => '',
        ));
    
        $wp_customize->add_control($setting_name, array(
            'label'   => $setting_label,
            'section' => 'social_section',
            'type'    => 'text',
        ));
     }

     function themeslug_sanitize_checkbox( $checked ) {
       // Boolean check.
       return ( ( isset( $checked ) && true == $checked ) ? true : false );
     }



?>
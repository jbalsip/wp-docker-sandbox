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

?>
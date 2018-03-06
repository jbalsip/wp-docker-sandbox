<?php
    add_theme_support( 'post-thumbnails' );

    function my_excerpt_length($length) {
        return 20;
    }
    add_filter('excerpt_length', 'my_excerpt_length');

    function archive_navi_template($template){
	$template = '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>';
	return $template;
    }
    add_action( 'navigation_markup_template', 'archive_navi_template' );
?>
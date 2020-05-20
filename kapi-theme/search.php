<?php get_header(); ?>

<?php
 global $wp_query;
 $total_results = $wp_query->found_posts;
 $search_query = get_search_query();
?>

<div class="root-container">
    <div class="main-contents">
        <h2 class="searchresult"><?php echo $search_query; ?>: Search Results<span>（<?php echo $total_results; ?>）</span></h2>
        <div class="blog-posts-container">
    
                <?php
                if( $total_results >0 ):
                if(have_posts()):
                while(have_posts()): the_post();
                get_template_part( 'content', get_post_format() ); 
                ?>
                <?php endwhile; endif; else: ?>

                <?php echo $search_query; ?> is not found.

                <?php endif; ?>

                </div>
                    <div class="page-navigator">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous' ),
                                'next_text'          => __( 'Next' ),
                            ) );
                        ?>
                    </div>
                </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>





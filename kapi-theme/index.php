<?php get_header(); ?>
            <div class="root-container">
                <div class="main-contents">
                    <div class="blog-posts-container">
                        <?php 
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                            get_template_part( 'content', get_post_format() ); 
//                            the_post_thumbnail();
                            endwhile; endif; 
                        ?> 
<!--                        <?php get_template_part( 'content', get_post_format() ); ?> -->
                    </div>
                    <div class="page-navigator">
                        <?php
                            $big = 9999999999;
                            $arg = array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'current' => max( 1, get_query_var('paged') ),
                                'total'   => $wp_query->max_num_pages
                            );
                            echo paginate_links($arg);
                        ?>
                    </div>
                </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

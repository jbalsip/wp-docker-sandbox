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

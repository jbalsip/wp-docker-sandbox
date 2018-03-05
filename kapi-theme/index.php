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
                    </div>
                </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

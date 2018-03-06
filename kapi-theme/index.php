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
                        			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous' ),
				'next_text'          => __( 'Next' ),
//				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
			) );

                        ?>
                    </div>
                </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

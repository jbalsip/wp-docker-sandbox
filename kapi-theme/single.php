<?php get_header(); ?>
            <div class="root-container">
                <div class="main-contents">
                    <div class="blog-posts-container">
                        <?php
                            // Start the Loop.
                            while ( have_posts() ) : the_post();
                            endwhile;
                        ?>
                        <div class="blog-post">
                            <div class="image-container single">
                                <?php the_post_thumbnail('large', array( 'class' => 'featured-image single' )); ?>
                            </div>
                                <?php
                                    if(get_the_time(‘U’) !== get_the_modified_time(‘U’))
                                    { echo 
                                    '<p class ="date-updated">
                                    <i class="fas fa-redo-alt fa-fw"></i>',
                                    the_modified_date(get_option('date_format'));}
                                    else
                                    { echo
                                    '<p class ="date-published">
                                    <i class="far fa-calendar fa-fw"></i>',
                                    the_time(get_option('date_format'));}
                                ?>
                                <?php the_category(); ?>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p class=""><?php the_content(); ?></p>
                        </div>
                    </div>
                    <div class="page-navigator single">
<!--
                        <?php 
                            the_post_navigation( array(
                            'prev_text'           => '« Previous Post: %title',
                            'next_text'           => '» Next Post: %title',
                            ) ); 
                        ?>
-->
                        <span class="previous-post"><?php previous_post_link( '« %link', '%title' ); ?></span>
                        <span class="next-post"><?php next_post_link( '%link »' , '%title' ); ?></span>
                    </div>
                </div><!-- .main-contents -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

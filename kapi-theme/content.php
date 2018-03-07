                        <div class="blog-post-summary">
                            <div class="image-container">
                                <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_post_thumbnail('medium', array( 'class' => 'featured-image' )); ?></a>
                            </div>
                            <p class="date-published">
                                <?php the_time(get_option('date_format')); ?> by <a href="#"><?php the_author(); ?></a>
                            </p>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><p class=""><?php the_excerpt(); ?></p></a>
                        </div>

                    

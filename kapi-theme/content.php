                        <div class="blog-post-summary">
                            <div class="image-container">
                                <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_post_thumbnail('medium', array( 'class' => 'featured-image thumnail' )); ?></a>
                            </div>
                            <p class="date-published">
                                <i class="far fa-calendar fa-fw"></i><?php the_time(get_option('date_format')); ?>
                            </p>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><p class=""><?php the_excerpt(); ?></p></a>
                        </div>

                    

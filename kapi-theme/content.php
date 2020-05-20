                        <div class="blog-post-summary">
                            <div class="image-container">
                                <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_post_thumbnail('medium', array( 'class' => 'featured-image thumnail' )); ?></a>
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
                            <a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_excerpt(); ?></p></a>
                        </div>

                    

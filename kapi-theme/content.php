                        <div class="blog-post-summary">
                            <div class="image-container">
                                <?php the_post_thumbnail('medium', array( 'class' => 'featured-image' )); ?></div>
                            <p class="date-published">
                                <?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
                            </p>
                            <h2 class="blog-post-title"><?php the_title(); ?></h2>
                            <p class=""><?php the_excerpt(); ?></p>
                        </div>

                    

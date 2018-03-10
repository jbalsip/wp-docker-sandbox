                <div class="side-contents">
                    <div class="side-contents-container">
                        <div class="side-content">
                            <h2>About</h2>
                                <p><?php the_author_meta( 'description' ); ?></p> 
                        </div>
                        <div class="side-content">
                            <h2>Recent Posts</h2>
                            <ul>
                                <?php
                                    $args = array( 'numberposts' => '5' );
                                    $recent_posts = wp_get_recent_posts( $args );
                                    foreach( $recent_posts as $recent ){
                                        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                                    }
                                    wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="side-contents-container">
                        <div class="side-content">
                            <h2>Archives</h2>
                            <ul>
                                <?php wp_get_archives( 'type=monthly' ); ?> 
                            </ul>
                            <h2>Meta</h2>
                            <ul class="list-unstyled">
                                <?php if (is_user_logged_in()) : ?>
                                  <li><a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a></li>
                                <?php else : ?>
                                  <li><a href="<?php echo wp_login_url(get_permalink()); ?>">Login</a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

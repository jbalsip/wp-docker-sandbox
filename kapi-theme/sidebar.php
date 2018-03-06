                <div class="side-contents">
                    <div class="side-contents-container">
                        <div class="recent-posts">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li>Our all new kapibara collection</li>
                                <li>High quality benefits in products</li>
                                <li>Building your brand is simple</li>
                                <li>Take a break you deserve it🥑</li>
                            </ul>
                        </div>
                    </div>
                    <div class="side-contents-container">
                        <div class="archives">
                            <h2>Archives</h2>
                            <ul>
                                <li>January 2018</li>
                                <li>December 2017</li>
                            </ul>
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

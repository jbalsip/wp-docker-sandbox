<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p><?php the_author_meta( 'description' ); ?></p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <ol class="list-unstyled">
    <?php if (is_user_logged_in()) : ?>
      <li><a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a></li>
    <?php else : ?>
      <li><a href="<?php echo wp_login_url(get_permalink()); ?>">Login</a></li>
    <?php endif;?>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
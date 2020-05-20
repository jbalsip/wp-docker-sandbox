<?php get_header(); ?>
<div class="root-container">
    <?php
      // Start the Loop.
      while ( have_posts() ) : the_post();
      endwhile;
      the_content();
    ?>
</div>

<?php get_footer(); ?>
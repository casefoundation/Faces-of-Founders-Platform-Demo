<?php
get_header(); ?>
  <main id="main" class="main-content-container" role="main">
    <?php 
    get_template_part('molecules/photo', 'generator');
    get_template_part('molecules/grid', 'founders');
    ?>
  </main><!-- /main -->
<?php
get_footer();

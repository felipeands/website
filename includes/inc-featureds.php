<?php
$count = 1;
$posts = get_field('destaques', 'options');

if ($posts):
?>

<section id="featureds">

  <div class="container">

    <h2>JOBS</h2>

    <div class="columns">

      <?php foreach ($posts as $key => $post): setup_postdata($post); ?>

      <?php get_template_part('includes/inc','project'); ?>

      <?php endforeach; ?>

    </div>
    <!-- .columns -->

    <div class="all">
      <a class="button" href="<?php bloginfo('url'); ?>/projects"><?php _e('[:en]See all[:pt]Ver outros'); ?></a>
    </div>

  </div>
  <!-- .container -->

</section>
<!-- #featureds -->
<?php
endif;
?>
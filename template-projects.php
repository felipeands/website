<?php 
/*
 * Template Name: Projects page
 * Template Post Type: page
 */
 ?><?php get_header(); ?>

<?php get_template_part('includes/inc','header'); ?>

<section id="projects">

  <div class="container">

    <nav class="breadcrumb">
      <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><a>Jobs</a></li>
      </ul>
    </nav>
    <!-- .breadcrumb -->

    <h2>JOBS</h2>

    <div class="columns">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
        );

      query_posts($args);

      if (have_posts()):

        while (have_posts()): the_post();
        
          get_template_part('includes/inc','project');

        endwhile;

      endif;
      ?>

    </div>
    <!-- .columns -->

  </div>
  <!-- .container -->

</section>
<!-- #projects -->

<?php get_template_part('includes/inc','contact'); ?>

<?php get_footer(); ?>
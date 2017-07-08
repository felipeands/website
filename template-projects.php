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
        <li><a>Projects</a></li>
      </ul>
    </nav>
    <!-- .breadcrumb -->

    <h2>Projects</h2>

    <div class="columns">

    <?php for ($x=0; $x<20; $x++): ?>

      <?php get_template_part('includes/inc','project'); ?>

    <?php endfor; ?>

    </div>
    <!-- .columns -->

  </div>
  <!-- .container -->

</section>
<!-- #projects -->

<?php get_template_part('includes/inc','contact'); ?>

<?php get_footer(); ?>
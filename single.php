<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('includes/inc','header'); ?>

<article id="project">

  <div class="container">

    <nav class="breadcrumb">
      <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url() ?>/projects">Jobs</a></li>
        <li><a><?php the_title(); ?></a></li>
      </ul>
    </nav>
    <!-- .breadcrumb -->

    <h2><?php the_title(); ?></h2>

    <div class="content">

      <?php the_content(); ?>
    
    </div>

  </div>
  <!-- .container -->

</article>
<!-- #projects -->

<?php get_template_part('includes/inc','contact'); ?>

<?php get_footer(); ?>
<section id="featureds">

  <div class="container">

    <h2>JOBS</h2>

    <div class="columns">

      <?php for ($x=0; $x<3; $x++): ?>

      <?php get_template_part('includes/inc','project'); ?>

      <?php endfor; ?>

    </div>
    <!-- .columns -->

    <div class="all">
      <a class="button" href="#">See all</a>
    </div>

  </div>
  <!-- .container -->

</section>
<!-- #featureds -->
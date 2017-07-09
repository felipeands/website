<section id="about">

  <div class="container">

    <div class="columns">

      <figure class="avatar">
        <a id="reload" class="button" href="javascript:void(0)">
          <i class="fa fa-refresh" aria-hidden="true"></i>
        </a>
        <img id="avatar" src="<?php bloginfo('template_url'); ?>/assets/avatars/poptocat.png" alt="Me" />
      </figure>

      <div class="about">

        <div class="author">
          <h1>
            <?php _e('[:en]Hello[:pt]Olá'); ?>,<br/> <?php _e('[:en]I am[:pt]Eu sou'); ?> <span>Felipe Andrada</span>
          </h1>
          <h2><?php _e('[:en]Frontend developer[:pt]Desenvolvedor frontend'); ?></h2>
        </div>
        <!-- .author -->

        <div class="career">

          <?php the_content(); ?>

        </div>
        <!-- .career -->

      </div>
      <!-- .column -->

    </div>
    <!-- .columns -->

  </div>
  <!-- .container -->

</section>
<!-- #about -->
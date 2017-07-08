      
      <div class="column">
        <div class="card job">
          <div class="card-image">
            <figure class="image is-4by3">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('job-thumbnail'); ?>
              </a>
            </figure>
          </div>
          <!-- .card-image -->
          <div class="card-content">
            <div class="content">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>
          </div>
          <!-- .card-content -->
          <footer class="card-footer">
            <a class="card-footer-item" href="<?php the_permalink(); ?>"><?php _e('[:en]Project details[:pt]Detalhes'); ?></a>
          </footer>
        </div>
        <!-- .card -->
      </div>
      <!-- .column -->

      
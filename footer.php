  <footer class="footer">

    <div class="container">
      <div class="content">
        <p class="thought">"Always be yourself. Unless you can be root. Then be root"</p>
        <p>Felipe Mendes Andrada. <?php echo date('Y'); ?> - Goiania - Brazil.</p>
        <div class="translate"><?php echo qtrans_generateLanguageSelectCode(); ?></div>
      </div>
    </div>
    <!-- .container -->


  </footer>


</body>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/scripts.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56523711-2', 'auto');
  ga('send', 'pageview');

</script>
</html>
  --><footer class="grid__item one-whole desk-one-fifth">
    <nav class="centered">
        <ul class="social-nav no-marker nav  nav--block">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Github</a></li>
        </ul>
      <?php /* wp_nav_menu( array( 'theme_location' => 'header-menu', 
                                  'container' => 'false', 
                                  'menu_class' => 'main-nav no-marker nav  nav--fit',
                                  'items_wrap' => '<ul id="%1$s" class="%2$s">'."\n".'%3$s    </ul>'."\n".'%0A',
                                  'walker' => new MV_Cleaner_Walker_Nav_Menu()) ); */ ?>

      </nav>
    </footer>
  </div>
  <?php wp_footer(); ?>

  <!-- JavaScript at the bottom for fast page loading -->
  <script type="text/javascript" src="//use.typekit.net/tqp1npn.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- scripts concatenated and minified via build script -->
  <script defer src="<?php bloginfo( "template_url" ); ?>/js/scripts.js"></script>
  <!-- end scripts -->
  
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
 <script>
    var _gaq=[['_setAccount','UA-648363-2'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>

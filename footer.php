  </div><!--  
  --><footer class="grid__item one-whole desk-one-fifth">
    <nav class="centered">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 
                                  'container' => 'false', 
                                  'menu_class' => 'social-nav no-marker nav nav--block',
                                  'items_wrap' => '<ul id="%1$s" class="%2$s">'."\n".'%3$s    </ul>'."\n".'%0A',
                                  'walker' => new MV_Cleaner_Walker_Nav_Menu()) ); ?>

      </nav>
    </footer>
  </div>
  <?php wp_footer(); ?>

  <!-- JavaScript at the bottom for fast page loading -->
  <script type="text/javascript">
  (function() {
    var config = {
      kitId: 'zhv1nlc',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();
</script>

  <!-- scripts concatenated and minified via build script -->
  <script defer src="<?php bloginfo( "template_url" ); ?>/js/scripts.js"></script>
  <!-- end scripts -->
  
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
 <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
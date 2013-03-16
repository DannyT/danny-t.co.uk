    </div>
  </div>
  <footer>

  </footer>
  <?php wp_footer(); ?>

  <!-- JavaScript at the bottom for fast page loading -->
  <script type="text/javascript" src="//use.typekit.net/bfy4sux.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script>
    var ua = navigator.userAgent.toLowerCase();
    var xuiJs='<?php bloginfo( "template_url" ); ?>/js/libs/';

    if (ua.indexOf("blackberry") >= 0)
    {
      xuiJs+='xui-bb-2.3.2.min.js';
    }
    else if (ua.indexOf("msie") >= 0)
    {
      xuiJs+='xui-ie-2.3.2.min.js';
    }
    else
    {
      xuiJs+='xui-2.3.2.min.js';
    }
    document.write('<script src="', xuiJs, '" type="text/JavaScript"><\/script>');
  </script>

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

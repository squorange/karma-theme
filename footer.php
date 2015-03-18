<?php
/**
 * The template for displaying the footer
 *
 */
?>

		<footer>
	    <div class="row">
	      <div class="large-6 medium-8 small-12 columns footer__menu-left">
					<ul class="footer__menu">
						<li class="footer__menu-item"><a href="<?php echo home_url(); ?>/about">About</a></li>
						<li class="footer__menu-item"><a href="http://www.cafepress.com/karmarescueshop" target="_blank">Store</a></li>
						<li class="footer__menu-item"><a href="<?php echo home_url(); ?>/terms-conditions">Terms &amp; Conditions</a></li>
						<li class="footer__menu-item"><a href="<?php echo home_url(); ?>/press">Press</a></li>
						<li class="footer__menu-item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
				</div>
	      <div class="large-3 medium-4 columns footer__social">
					<div class="social"><a class="social__fb" target="_blank" href="https://www.facebook.com/karmarescue1"></a></div>
					<div class="social"><a class="social__tw" target="_blank" href="https://twitter.com/KarmaRescue"></a></div>
					<div class="social"><a class="social__in" target="_blank" href="http://instagram.com/karmarescueorg"></a></div>
					<div class="social"><a class="social__tu" target="_blank" href="http://karmarescue.tumblr.com/"></a></div>
				</div>
	      <div class="large-3 medium-12 columns">
					<a href="http://visitor.r20.constantcontact.com/manage/optin?v=001k6dau0Gb9W9X5SjgzmZZscQZv5KhYeqIuyRWc-LzDbBd4nu-VMnMpL0O2pQkKKChuR2uIwdi1u9kNeIbTjCvcgpaUvjo76gFiwFIzYwDNvQ%3D" target="_blank" class="expand button button--newsletter">Get our newsletter</a>
				</div>								
			</div>
		</footer>
    
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-56393829-1', 'auto');
		  ga('send', 'pageview');

		</script>		
  </body>
</html>
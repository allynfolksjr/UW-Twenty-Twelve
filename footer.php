<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div id="footerMainNoPatch" class="logoYes wNo">
 <div id="footerLeft">    	
  <ul>
   <li class="logoArea"><a href="//www.washington.edu/">&#169; 2012 University of Washington</a></li>  
  </ul>
 </div>
 <div id="footerRight">  
  <ul>
   <li class="centerText"><a href="//www.seattle.gov/">Seattle, Washington</a></li>
  </ul>   
 </div>
 <div id="footerCenter">
  <ul>
   <li><a href="//www.washington.edu/home/siteinfo/form/">Contact Us</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/jobs/">Jobs</a></li>
   <li class="footerLinkBorder"><a href="//myuw.washington.edu/">My UW</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/online/privacy">Privacy</a></li>
   <li class="footerLinkBorder"><a href="//www.washington.edu/online/terms">Terms</a></li>
  </ul>
 </div>
</div>


</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package castom-theme
 */

?>
   <footer>

      <div class="row">

         <div class="twelve columns">
			<?php wp_footer(); ?>
				<?php wp_nav_menu( array(
					'theme_location'  => 'menu-2',
					'container' 	 => null,
					'menu_class'     => 'footer-nav',
					'items_wrap'      => '<ul id="" class="footer-nav">%3$s</ul>',
					
				)); ?>


            <ul class="footer-social">
               <li><a href="https://www.facebook.com/A.Kostousov9"><i class="fa fa-facebook"></i></a></li>    
               <li><a href="https://www.linkedin.com/in/a-kostousov"><i class="fa fa-linkedin"></i></a></li>
  
            </ul>

            <ul class="copyright">
               <li>Created &copy; 2019 by Andrey Kostousov</li> 
               <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>               
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

<!--  Java Script
   ================================================== -->
	


</body>

</html>

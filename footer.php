<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>



<footer class="pink-back">
<div class="row">
	
	<div class="small-6 medium-2 columns gold-back">
		<div class="foot-logo"></div>		
	</div>
	
	<div class="small-6 medium-10 columns">
				
		<div class="row">
			
			<div class="small-6 medium-3 columns">
			<div class="foot-content">
				<h4>Handel’s Hotel</h4>
				<p><?php the_field('address', 'option'); ?></p>
			</div>
			</div>
			<div class="small-6 medium-3 columns">
			<div class="foot-content">
				<h4>Contact Handel’s Hotel</h4>		
				<a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a><br>
				<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
			</div>
			</div>
			<div class="small-6 medium-3 columns">
			<div class="foot-content">
				<h4>More Infomation</h4>		
				<?php wp_nav_menu( array( 'menu' => 'footer') ); ?>
			</div>
			</div>
			<div class="small-6 medium-3 columns">
			<div class="foot-content">
				<h4>Social Media</h4>		
				<?php wp_nav_menu( array( 'menu' => 'social') ); ?>
			</div>
			</div>
			
		</div>
	</div>
	
</div>
</footer>


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>


</body>
</html>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>



<footer class="pink-back">
<div class="row">
	
	<div class="small-12 medium-2 columns gold-back">
	<a href="<?php echo get_site_url(); ?>"><div class="foot-logo"></div></a>
	</div>
	
	<div class="small-12 medium-10 columns">
				
			
			<div class="small-12 medium-6 large-3 columns foot-col">
			<div class="foot-content">
				<h4>Handel’s Hotel</h4>
				<p><?php the_field('address', 'option'); ?></p>
			</div>
			</div>
			
			<div class="small-12 medium-6 large-3 columns foot-col">
			<div class="foot-content">
				<h4>Contact</h4>		
				<a href="tel:<?php the_field('tel', 'option'); ?>">Phone: <?php the_field('tel', 'option'); ?></a><br>
				<a href="mailto:<?php the_field('email', 'option'); ?>">Email: <?php the_field('email', 'option'); ?></a><br>
				<a href="https://wa.me/<?php the_field('whatsapp', 'option'); ?>?text=Handels%20Hotel,%20talk%20to%20us%20now">WhatsApp: <?php the_field('whatsapp', 'option'); ?></a>
			</div>
			</div>
			
			<div class="small-12 medium-6 large-3 columns foot-col">
			<div class="foot-content">
				<h4>More Infomation</h4>		
				<?php wp_nav_menu( array( 'menu' => 'footer') ); ?>
			</div>
			</div>
			
			<div class="small-12 medium-6 large-3 columns foot-col">
			<div class="foot-content">
				<h4>Social Media</h4>		
				<?php wp_nav_menu( array( 'menu' => 'social') ); ?>
			</div>
			</div>
			
	</div>

<span class="signoff">Copyright Handel's Hotel 2021 - Website by <a target="_blank" href="https://www.weareopen.ie/">Open</a></span>

</div>

</footer>


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

<script type="text/javascript" id="guestline-tag" data-group-id="HANDELS" async src="https://gxptag.guestline.net/static/js/tag.js"></script>

</body>
</html>

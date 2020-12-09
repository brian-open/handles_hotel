<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

<div class="row">

<div class="page-block no-page">    
    
<div class="max-width blog-page">

	<h1 class="main-title main-title-line-dark">Not Found</h1>

	            <div class="small-12 medium-8 large-8 columns no-pad news-block">
                      
                    <p><?php _e( 'The post, page or whatever it was you were looking for might not be here. It could have been moved, deleted or maybe the URL you typed or the link you clicked was incorrect in some way.' ); ?></p>

                    <p><?php _e( 'To go back to the homepage please click the button below,' ); ?></p>
                    
                    <p><?php _e('<a class="back-to-home" href="/">Homepage</a>' ); ?></p>
                    
						
					<h2><?php _e( 'Contact Us'); ?></h2>
					<p><?php _e( 'If you are absolutely, positively certain it was supposed to be here and just can&rsquo;t seem to find it,' ); ?> <a href="mailto:info@nationalchildrensresearchcentre.ie"><?php _e( 'please let us know.'); ?></a> <?php _e( 'We would be more than happy to look into the matter for you and let you know what happened.'); ?></p>

                    
                    <p><?php _e('<a class="back-to-home" href="/who-we-are/contact/">Contact</a>' ); ?></p>
                    
                    
                    
                    
                     </div> 

    </div>    
    
</div>        
    
</div>    
    
<div class="clear"></div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
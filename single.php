<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>


<!-- ================================================================================================================ -->
<!-- HEADER BLOCK -->
<!-- ================================================================================================================ -->

<section class="header-block-home">
	
	<?php
        if(wp_is_mobile()) // On mobile
        {
			$imageArray = get_field('header_image_mobile');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; 
        }
        else
        {
			$imageArray = get_field('header_image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; 
        }
		?>	

		<img class="header-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
		
		<div class="header-content">
			
			<div class="header-text">
				<h2 class="title_text"><?php the_field('title'); ?></h2>
				<div class="small_text"><?php the_field('body_text'); ?></div>
			</div>
			
			<div class="book-now-widget">
				<form data-guestline-form><input type="hidden" name="hotel-id" value="HANDELS" />
					<input type="text" id="datepicker-arv" name="arrival" autocomplete="off" placeholder="Arrive"><input type="text" id="datepicker-dpt" name="departure" autocomplete="off" placeholder="Depart">
					<select class="adults" name="adults" placeholder="Adults">
						<option value="0 Adult">0 Adult</option>
						<option value="1 Adult">1 Adult</option>
						<option value="2 Adults">2 Adults</option>
						<option value="3 Adults">3 Adults</option>
						<option value="4 Adults">4 Adults</option>
					</select>
					<select class="children" name="children" placeholder="Children">
						<option value="0 Child">0 Child</option>
						<option value="1 Child">1 Child</option>
						<option value="2 Child">2 Child</option>
						<option value="3 Child">3 Child</option>
						<option value="4 Child">4 Child</option>
					</select>
					<button class="book-button" type="submit">Check Availability</button>
				</form>
			</div>
		
		</div>
        				
</section>


<!-- ================================================================================================================ -->
<!-- INTRO BLOCK -->
<!-- ================================================================================================================ -->


	<div class="row" style="background-color:<?php the_field('intro_background'); ?>">
		<div class="max-width home-intro-block">
			
			<div class="small-12 medium-4 columns home-intro-block-title">
			<?php if ( get_field( 'intro_title' ) ): ?>
            	<h2><?php the_field('intro_title'); ?></h2>
            <?php else: // field_name returned false ?>
            	<?php the_title( '<h2>', '</h2>' ); ?>
            <?php endif; // end of if field_name logic ?>

			<?php if ( get_field( 'distance' ) ): ?>            
            <div class="post-distance">
            <span><?php the_field('distance'); ?></span>
            </div>
            <?php endif; // end of if field_name logic ?>
            
            <?php
				$imageArray = get_field('intro_image');
				$imageAlt = $imageArray['alt'];
				$imageTitle = $imageArray['title'];
				$imageURL = $imageArray['url'];
				$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="intro-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	

            </div>

			<div class="small-12 medium-7 columns">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<div class="the-content">
							<?php the_content(); ?>
						</div><!-- the-content -->
				<?php endwhile; ?>
			<?php endif; ?>                
            </div>
            
            <div class="clear"></div>
		</div>
	</div>



<?php get_footer(); // This fxn gets the footer.php file and renders it ?>

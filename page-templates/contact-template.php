<?php
/**
 * Template Name: Contact
 *
 */

get_header(''); ?>


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


	<div class="row slate-back">
		<div class="max-width home-intro-block">
			
			<div class="small-12 medium-4 columns contact-content">
            	<h4 style="color:#ffffff;"><?php the_field('address', 'option'); ?></h4><br><br>
				<h4><a style="color:#ffffff;" href="tel:<?php the_field('tel', 'option'); ?>">Phone: <?php the_field('tel', 'option'); ?></a><br>
				<a style="color:#ffffff;" href="mailto:<?php the_field('email', 'option'); ?>">Email: <?php the_field('email', 'option'); ?></a><br>
				<a style="color:#ffffff;" href="https://wa.me/<?php the_field('whatsapp', 'option'); ?>?text=Handels%20Hotel,%20talk%20to%20us%20now">WhatsApp: <?php the_field('whatsapp', 'option'); ?></a></h4>
            </div>
            
			<div class="small-12 medium-8 columns contact-form">
        		<h3>Have a Question?</h3>
				<?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div>

            <div class="clear"></div>
		</div>
	</div>


	<div class="row slate-back">
		<div class="max-width pad-block">

			<div class="small-12 map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.954791263718!2d-6.269647223337801!3d53.34406546383622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c27e9c6d163%3A0x308c3104f6b1a5b7!2sTemple%20Bar%2C%20Dublin%208%2C%20D08%20E7R0!5e0!3m2!1sen!2sie!4v1606433371913!5m2!1sen!2sie" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>

            <div class="clear"></div>
		</div>
	</div>


<!-- ================================================================================================================ -->
<!-- SUBMIT FORM -->
<!-- ================================================================================================================ -->



<?php get_footer(); ?>


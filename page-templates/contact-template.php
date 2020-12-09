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
		$imageArray = get_field('header_image');
		$imageAlt = $imageArray['alt'];
		$imageTitle = $imageArray['title'];
		$imageURL = $imageArray['url'];
		$imageThumbURL = $imageArray['sizes']['large']; ?>	

		<img class="header-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
		
		<div class="header-content">
			
			<div class="header-text">
				<h2 class="title_text"><?php the_field('title'); ?></h2>
				<p class="small_text"><?php the_field('body_text'); ?></p>
			</div>
			
			<div class="book-now-widget">
				<span>5 Oct</span>
				<span>6 Oct</span>
				<span>2 Guest</span>
				<span>Check Availability</span>
			</div>
		
		</div>
        				
</section>


<!-- ================================================================================================================ -->
<!-- INTRO BLOCK -->
<!-- ================================================================================================================ -->


	<div class="row slate-back">
		<div class="max-width home-intro-block">
			
			<div class="small-12 medium-4 columns contact-content">
            	<h4 style="color:#ffffff;"><?php the_field('address', 'option'); ?></h4>
            </div>
			<div class="small-12 medium-4 columns contact-content">
				<h4><a style="color:#ffffff;" href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a><br>
				<a style="color:#ffffff;" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></h4>
            </div>

		<div class="small-12 map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.954791263718!2d-6.269647223337801!3d53.34406546383622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c27e9c6d163%3A0x308c3104f6b1a5b7!2sTemple%20Bar%2C%20Dublin%208%2C%20D08%20E7R0!5e0!3m2!1sen!2sie!4v1606433371913!5m2!1sen!2sie" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

		</div>

            <div class="clear"></div>
		</div>
	</div>


<!-- ================================================================================================================ -->
<!-- SUBMIT FORM -->
<!-- ================================================================================================================ -->


	<div class="row">
		<div class="small-12 medium-8 medium-centered">
		<div class="border_2col gold-back">
		<div class="small-12 medium-8 medium-centered border_2col-pad centered">
        	<h3>Have a Question?</h3>
			
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
			
        </div>
        </div>
        </div>
	</div>


<?php get_footer(); ?>


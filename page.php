<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>


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


	<div class="row" style="background-color:<?php the_field('intro_background'); ?>">
		<div class="max-width home-intro-block">
			
			<div class="small-12 medium-4 columns home-intro-block-title">
            	<h2><?php the_field('intro_title'); ?></h2>
            </div>

			<div class="small-12 medium-8 columns">
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
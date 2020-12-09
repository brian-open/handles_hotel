<?php
/**
 * Template Name: Home
 *
 */

get_header(''); ?>


<!-- ================================================================================================================ -->
<!-- HEADER BLOCK HOME -->
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
<!-- INTRO BLOCK HOME -->
<!-- ================================================================================================================ -->


	<div class="row">
		<div class="max-width home-intro-block">
			
			<div class="small-12 medium-5 columns home-intro-block-title">
            	<?php the_field('intro_title'); ?>
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
            
		</div>
	</div>


<!-- ================================================================================================================ -->
<!-- FEATURE BLOCKS HOME -->
<!-- ================================================================================================================ -->


<?php if( have_rows('feature_blocks') ): ?>

    <?php while( have_rows('feature_blocks') ): the_row(); ?>

<?php if ( get_sub_field( 'right' ) ): ?>

	<div class="row">
		<div class="max-width pad-block-1">
		<div class="small-12 medium-7 columns no-pad match-block-1 feature">
		<?php
			$imageArray = get_sub_field('image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="feature-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
        </div>
		<div class="small-12 medium-5 columns grey-back no-pad match-block-1 feature">
		<div class="shape-left-feature"></div>
		<div class="feature-content">
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('description'); ?></p>
            
	    <?php 
			$link = get_sub_field('link');
			if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
    	?>
		<a class="button-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
        </div>
        </div>
        </div>
	</div>

<?php else: // field_name returned false ?>

	<div class="row">
		<div class="max-width pad-block-1">
		<div class="small-12 medium-5 columns pink-back no-pad match-block-1 feature">
		<div class="feature-content">
		<div class="shape-right-feature"></div>
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('description'); ?></p>
            
	    <?php 
			$link = get_sub_field('link');
			if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
    	?>
		<a class="button-gold" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
        </div>
        </div>

		<div class="small-12 medium-7 columns no-pad match-block-1 feature">
		<?php
			$imageArray = get_sub_field('image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="feature-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
        </div>
        </div>
	</div>

<?php endif; // end of if field_name logic ?>


    <?php endwhile; ?>

<?php endif; ?>



<!-- ================================================================================================================ -->
<!-- AMENITIES BLOCKS HOME -->
<!-- ================================================================================================================ -->


	<div class="row">
		<div class="max-width">
			<div class="small-12 medium-6 medium-centered amenities-intro">
				
				<h3><?php the_field('amenities-title'); ?></h3>
				<p><?php the_field('amenities-description'); ?></p>

        	</div>
        </div>
	</div>
	<div class="row ">
		<div class="max-width ">
			<div class="small-12 medium-10 medium-centered gold-back amenities-block">
				
				<h3>Amenities</h3>


				<?php if( have_rows('icons') ): ?>
				<ul class="amenities-icons">
					<?php while( have_rows('icons') ): the_row(); ?>
					
					<li>
						<?php
							$imageArray = get_sub_field('icon');
							$imageAlt = $imageArray['alt'];
							$imageTitle = $imageArray['title'];
							$imageURL = $imageArray['url'];
							$imageThumbURL = $imageArray['sizes']['large']; ?>	
						<img class="icon-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
					
						<ul class="tooltip">
							<li>
							<span class="title"><?php the_sub_field('tooltip_heading'); ?></span>
							<span class="body"><?php the_sub_field('tooltip_text'); ?></span>
							</li>
						</ul>
					</li>
					
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
        	</div>
        </div>
	</div>


<!-- ================================================================================================================ -->
<!-- ATTRACTIONS BLOCK HOME -->
<!-- ================================================================================================================ -->


	<div class="row slate-back relative">
	<div class="shape-left-feature"></div>
	<div class="shape-right-feature"></div>
		<div class="max-width">
			<div class="small-12 medium-10 medium-centered attraction">
				
			<h3><?php the_field('attraction_title'); ?></h3>

<!-- Slider main container -->
<div class="swiper-container">
	
<div class="swiper-container-inner">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        
		<?php if( have_rows('attraction') ): ?>
		<?php while( have_rows('attraction') ): the_row(); ?>
		
        <div class="swiper-slide">
	        
			<div class="small-12 medium-6 columns pink-back no-pad match-block-2">
				<div class="slide-content">
	        		<h4><?php the_sub_field('title'); ?></h4>
					<span>10 min — 800m</span>
					<p><?php the_sub_field('description'); ?></p>
				</div>
			</div>
			
			<div class="small-12 medium-6 columns no-pad match-block-2">
				<?php
					$imageArray = get_sub_field('image');
					$imageAlt = $imageArray['alt'];
					$imageTitle = $imageArray['title'];
					$imageURL = $imageArray['url'];
					$imageThumbURL = $imageArray['sizes']['large']; ?>	
				<img class="icon-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
			</div>
			
        </div>
       
		<?php endwhile; ?>
		<?php endif; ?>
		
    </div>
	</div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-prev"></div>
    <div class="swiper-next"></div>

</div>

        	</div>
        </div>
	</div>


<!-- ================================================================================================================ -->
<!-- NEWS BLOCK HOME -->
<!-- ================================================================================================================ -->

<div class="row relative">
<div class="news-pink-back"></div>
    <div class="max-width news-block-wrap">
		<div class="small-12 medium-10 medium-centered">
                <?php
                        global $wp_query;
                        $all_posts = $wp_query->posts;
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            query_posts( array( 
                           'post_type' => 'post',       
                           'posts_per_page' => '3',
                           'paged' => $paged
                        ) );
                        ?>

                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <div class="news-row">

                        <div class="news-container">

                            		<a class="story" href="<?php the_permalink(); ?>">
	                                   	<div class="small-12 medium-4 large-4 columns news-col">
                                            <div class="feature-img">
                                                <?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail('news-thumb');
                                                            } else { ?>
                                                <?php } ?>
                                            </div>
											<div class="post-details">
                                                <h4><?php echo wp_trim_words( get_the_title(), 6 ); ?></h4>
                                                <p><?php echo $excerpt = wp_trim_words( get_the_excerpt(), $num_words = 26, $more = '...' ); ?></p>
												<button class="button-grey">Read More</button>
                                            </div>                                  
                                         </div> 
                            		</a>                      
                            
                        </div>

                    </div>         
                             
                    <?php endwhile; ?> 
                <?php endif; ?>

                <?php wp_reset_query(); ?>    	
			</div>
	   	<div class="clear"></div>
    </div>
</div>



<!-- ================================================================================================================ -->
<!-- LOCATION BLOCK HOME -->
<!-- ================================================================================================================ -->



<div class="row slate-back relative">
		<div class="shape-left-feature"></div>
		<div class="shape-right-feature"></div>
	<div class="max-width">
		<div class="small-12 medium-8 medium-centered location">
			<h3>Location</h3>
			<p><?php the_field('address', 'option'); ?></p>
			<a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a> | <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
		</div>
		<div class="small-12 medium-10 medium-centered map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.954791263718!2d-6.269647223337801!3d53.34406546383622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c27e9c6d163%3A0x308c3104f6b1a5b7!2sTemple%20Bar%2C%20Dublin%208%2C%20D08%20E7R0!5e0!3m2!1sen!2sie!4v1606433371913!5m2!1sen!2sie" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

		</div>
    </div>
</div>







<?php get_footer(); ?>


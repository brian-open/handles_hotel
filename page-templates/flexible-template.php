<?php
/**
 * Template Name: Flexible
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
						<option value="2 Child">2 Children</option>
						<option value="3 Child">3 Children</option>
						<option value="4 Child">4 Children</option>
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
            	<h2><?php the_field('intro_title'); ?></h2>
            
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


<!-- ================================================================================================================ -->
<!-- FLEXIBLE BLOCKS -->
<!-- ================================================================================================================ -->


<?php while( the_flexible_field("flexible_items") ): ?>


<!-- FEATURE BLOCKS -->


<?php if( get_row_layout() == "features" ): ?>

<?php if ( get_sub_field( 'right' ) ): ?>

	<div class="row">
		<div class="max-width pad-block-1">
			<!-- Flex Row -->
				<div class="flex-row">
				<?php if ( wp_is_mobile() ): ?>
					<div class="small-12 medium-7 columns no-pad feature ">
					<?php else: ?>
					<div class="small-12 medium-7 columns no-pad match-block-1 feature">
					<?php endif; ?>

					<?php
						$imageArray = get_sub_field('image');
						$imageAlt = $imageArray['alt'];
						$imageTitle = $imageArray['title'];
						$imageURL = $imageArray['url'];
						$imageThumbURL = $imageArray['sizes']['large']; ?>	
						<img class="feature-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />
						<div class="space-bottom"></div>	
					</div>

					<?php if ( wp_is_mobile() ): ?>
					<div class="small-12 medium-5 columns grey-back no-pad feature">
					<?php else: ?>
					<div class="small-12 medium-5 columns grey-back no-pad match-block-1 feature">
					<?php endif; ?>
					<div class="space-top"></div>	
					<div class="shape-left-feature"></div>
					<div class="feature-content">
						<div class="wrap on-right">
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
			<!-- Flex Row -->
        </div>
	</div>

<?php else: // field_name returned false ?>

	<div class="row">
		<div class="max-width pad-block-1">
			<!-- Flex Row -->
			<div class="flex-row">
					<?php if ( wp_is_mobile() ): ?>
				<div class="small-12 medium-5 columns pink-back no-pad feature">
				<?php else: ?>
				<div class="small-12 medium-5 columns pink-back no-pad match-block-1 feature">
				<?php endif; ?>
				<div class="space-top"></div>
				<div class="shape-right-feature"></div>
					<div class="feature-content">
						<div class="wrap">
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
				</div>

				<?php if ( wp_is_mobile() ): ?>
				<div class="small-12 medium-7 columns no-pad feature">
				<?php else: ?>
				<div class="small-12 medium-7 columns no-pad match-block-1 feature">
				<?php endif; ?>

				<?php
					$imageArray = get_sub_field('image');
					$imageAlt = $imageArray['alt'];
					$imageTitle = $imageArray['title'];
					$imageURL = $imageArray['url'];
					$imageThumbURL = $imageArray['sizes']['large']; ?>	
					<img class="feature-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
					<div class="space-bottom"></div>
				</div>			
			</div>
			<!-- ./ Flex Row -->
        </div>
	</div>

<?php endif; // end of if field_name logic ?>


<!-- WHITE BORDER TEXT IMAGE -->


<?php elseif( get_row_layout() == "border_2col" ): ?>

	<div class="row">
		<div class="small-12 medium-10 large-9 medium-centered">
		<div class="border_2col gold-back">
		<div class="small-12 medium-4 columns border_2col-pad">
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

		<div class="small-12 medium-8 columns border_2col-pad">
		<div class="border_2col-img">
		<?php
			$imageArray = get_sub_field('image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="border_2col-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
        </div>
        </div>

        <div class="clear"></div>			
        </div>
        </div>
	</div>
	
	
<!-- WHITE BORDER TEXT CENTERED -->

<?php elseif( get_row_layout() == "border_1col" ): ?>


	<div class="row">
		<div class="small-12 medium-8 medium-centered">
		<div class="border_2col slate-back">
		<div class="small-12 medium-8 medium-centered border_2col-pad centered">
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

        <div class="clear"></div>			
        </div>
        </div>
	</div>


<?php elseif( get_row_layout() == "full_grey_block" ): ?>


	<div class="row slate-back">
		<div class="small-12 medium-8 medium-centered full_grey_block">
		
		<h3><?php the_sub_field('title'); ?></h3>
		
		<div class="row">
		<div class="small-12 medium-5 columns">
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
        
		<div class="small-12 medium-7 columns">
		<?php
			$imageArray = get_sub_field('image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="border_2col-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
        </div>
        </div>

        </div>
	</div>


<?php elseif( get_row_layout() == "discover_block" ): ?>


<div class="row relative">
<div class="news-pink-back"></div>
    <div class="max-width news-block-wrap">
		<div class="small-12 medium-10 medium-centered">

			<?php if( have_rows('locations_block') ): ?>

                    <div class="news-row">
				
				<?php while( have_rows('locations_block') ): the_row(); ?>

                        <div class="news-container">

	                                   	<div class="small-12 medium-4 large-4 columns news-col">
                                            <div class="feature-img">
											<?php
											$imageArray = get_sub_field('image');
											$imageAlt = $imageArray['alt'];
											$imageTitle = $imageArray['title'];
											$imageURL = $imageArray['url'];
											$imageThumbURL = $imageArray['sizes']['large']; ?>	
											<img class="border_2col-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
                                            </div>
											<div class="post-details">
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p><?php the_sub_field('description'); ?></p>
												<?php 
													$link = get_sub_field('link');
													if( $link ): 
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
												?>
												<a class="button-grey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php endif; ?>
                                            </div>                                  
                                         </div> 
                            
                        </div>
                    <?php endwhile; ?> 

                    </div>         
                             
                <?php endif; ?>

                <?php wp_reset_query(); ?>    	
			</div>
	   	<div class="clear"></div>
    </div>
</div>



<?php elseif( get_row_layout() == "gallery" ): ?>



<div class="row relative">
<div class="news-pink-back"></div>
    <div class="max-width news-block-wrap">
		<div class="small-12 medium-10 medium-centered gallery_block">

				<?php $images = get_sub_field('images'); if( $images ): ?>

					<h3><?php the_sub_field('title'); ?></h3>

                    <div class="news-row">
				
					<?php foreach( $images as $image ): ?>

                        <div class="news-container">

	                       	<div class="small-12 medium-4 large-4 columns gallery-col">
									<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div> 
                            
                        </div>
						<?php endforeach; ?>

                    </div>         
                             
                <?php endif; ?>

                <?php wp_reset_query(); ?>    	
			</div>
	   	<div class="clear"></div>
    </div>
</div>

<?php endif; ?>

<?php endwhile; ?>



<!-- ================================================================================================================ -->
<!-- ARTICLE BLOCK -->
<!-- ================================================================================================================ -->


<?php if(get_field('articles_repeater')): ?>

<div class="row relative">
<div class="news-pink-back"></div>
    <div class="max-width news-block-wrap">
		<div class="small-12 medium-10 medium-centered">

                <?php $count_team = count(get_field('articles_repeater')); ?>
                    <?php $team = 0; while(has_sub_field('articles_repeater')): ?>
                        <?php
                            $post_object = get_sub_field('article');

                            if( $post_object ): 

                                    // override $post
                                    $post = $post_object;
                                    setup_postdata( $post );    
                                    ?>

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

                                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php endif; ?>
                            <?php $team++; endwhile; ?>

			</div>
	   	<div class="clear"></div>
    </div>
</div>

<?php endif; ?>                    



<?php get_footer(); ?>


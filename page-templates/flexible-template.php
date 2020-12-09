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
			
			<div class="small-12 medium-5 columns home-intro-block-title">
            	<h2><?php the_field('intro_title'); ?></h2>
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
		<div class="small-12 medium-12 large-7 columns no-pad match-block-1 feature">
		<?php
			$imageArray = get_sub_field('image');
			$imageAlt = $imageArray['alt'];
			$imageTitle = $imageArray['title'];
			$imageURL = $imageArray['url'];
			$imageThumbURL = $imageArray['sizes']['large']; ?>	
			<img class="feature-img" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;?>" />	
        </div>
		<div class="small-12 medium-12 large-5 columns grey-back no-pad match-block-1 feature">
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
			<p style="padding-right: 60px;"><?php the_sub_field('description'); ?></p>
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

        <div class="clear"></div>			

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



<?php get_footer(); ?>


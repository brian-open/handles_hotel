<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
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



<div class="row">
    <div class="max-width-news">
        
                <?php
                        global $wp_query;
                        $all_posts = $wp_query->posts;
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            query_posts( array( 
                           'post_type' => 'post',       
                           'paged' => $paged
                        ) );

                        ?>

                <?php if ( have_posts() ) :  ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="small-12 medium-3 large-3 columns news-wrap">

                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('news-thumb');
                                    } else { ?>
                                <?php } ?>

                                 <h3><?php echo wp_trim_words( get_the_title(), 6 ); ?></h3>
								 <button class="read-news">Read More</button>
                            </a>                      
                            
                        </div>
                             
                <?php endwhile; ?> 
                <?php endif; ?>

                <?php wp_reset_query(); ?>    	
        
        
    </div>
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
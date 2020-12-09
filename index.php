<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>


<div class="row">
    <div class="max-width pad-content">
        
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

                <?php if ( have_posts() ) : 
                // Do we have any posts in the databse that match our query?
                // In the case of the home page, this will call for the most recent posts 
                ?>

                    <?php while ( have_posts() ) : the_post(); 
                    // If we have some posts to show, start a loop that will display each one the same way


                    ?>

                    <div class="news-row">

                        <div class="news-container">

                            <a class="story" href="<?php the_permalink(); ?>">
                                                            
                                    <div class="small-12 medium-4 large-4 columns img-block no-mob-pad">

                                            <div class="feature-img">
                                                <?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail('news-thumb');
                                                            } else { ?>
															xxxxxxx
                                                <?php } ?>

                                            </div>
                                        
                                         </div> 

                                        <div class="small-12 medium-3 large-3 columns blog-text no-mob-pad">
                                            <div class="post-details">
                                                <h3><?php echo wp_trim_words( get_the_title(), 6 ); ?></h3>

                                                <div class="the-content">

                                                        <p><?php echo $excerpt = wp_trim_words( get_the_excerpt(), $num_words = 26, $more = '...' ); ?></p>

                                                </div>

                                               <button class="read-news">Read More</button>

                                            </div>                                  
                                        </div>
                                
                            </a>                      
                            
                        </div>

                    </div>         
                             
                    <?php endwhile; ?> 
					
                    <!-- pagintation -->
                    <div id="pagination" class="clearfix blog-posts pg-<?php echo get_the_ID(); ?>">
                        <div class="newer"><?php previous_posts_link( 'Next' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>


                        <div class="older p-<?php echo get_the_ID(); ?>"><?php next_posts_link( 'Previous' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>

                        <div class="clear"></div>

                    </div><!-- pagination -->	


                <?php endif; ?>

                <?php wp_reset_query(); ?>    	
        
        
    </div>
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
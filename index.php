<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ldc
 */

get_header();
?>

	
<div class="idc-product"> 
  <div class="container">
      <div class="middle-area"> 
          <div class="blog-top"> 
        <div class="left-pro">  
           <div class="top-about"> 
              <div class="name-about"> 
                  <h2><?php single_post_title(); ?></h2>
              </div>
              
          </div>
        </div>
         <div class="right-pro">  
           <div class="bread-crumbs"> 
                  <a href="<?php echo home_url(); ?>">Home</a>> <a href="<?php echo get_post_type_archive_link( 'post' ); ?>"><?php single_post_title(); ?></a>
              </div>
        </div>

      </div> 
      <div class="row"> 



			<?php while(have_posts()): the_post(); ?>
            <div class="col-md-4">
              <div class="single-product"> 

                  <div class="blog-image"> 
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                  <div class="product-cont-top"> 
                      <div class="porduct-name"> 
                          <a href="<?php the_permalink(); ?>"><h2><?php echo wp_trim_words(get_the_title(), 6, false); ?></h2></a>
                      </div>
                  </div>
                  <div class="blog-descrip"> 
                      <p><?php echo wp_trim_words(get_the_content(), 11, '</p>
                  </div>
                  <div class="read-more-blog"> 
                      <div class="read-more"> 
                        <a href="'.get_the_permalink().'">Read More</a>'); ?>
                      </div>
                   </div>


              </div>
            </div>
        	<?php endwhile; ?>

            



         
         </div>
          <div class="load-more"> 
                <a href="#">LOAD MORE..</a>
          </div>
      </div>
  </div>
</div>

<?php
get_footer();

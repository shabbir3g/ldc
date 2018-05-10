<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ldc
 */

?>

	


<!-- Footer section -->
<section class="footer-top"> 
    <div class="container">
      <div class="middle-area"> 

         <div class="row">
          <div class="col-md-3"> 
              <div class="footer-logos"> 

              <?php $footer_logo_upload = get_field('footer_logo_upload','options');
               if($footer_logo_upload): ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo  $footer_logo_upload['url']; ?>" alt="<?php echo  $footer_logo_upload['title']; ?>"></a>
              <?php endif; ?>


              </div>
          </div>
          <div class="footer-top-text col-md-7"> 
             <?php $footer_text = get_field('footer_text','options');
               if($footer_text): 

                echo  $footer_text;

               endif; ?>

            
          </div>
          <div class="col-md-2"> 
              <div class="affliate"> 
                   <?php $affiliate_button = get_field('affiliate_button','options');
                   if($affiliate_button): ?>
                  <a href="<?php echo $affiliate_button['url']; ?>"><?php echo $affiliate_button['title']; ?></a>
                <?php endif; ?>
              </div>
          </div>
      </div>

      </div>
    </div>
</section>
<section class="footer">
	<div class="container">
		<div class="row">

              <?php $footer_menu = get_field('footer_menu','options');
                   if($footer_menu): ?>
              <div class="footer-nav">
                  <?php wp_nav_menu(array(
	                	'theme_location'	=> 'footer-menu',
	                	'container'			=> ' ',
	                )); ?>
              </div>
              <span class="footer-line"></span>
               <?php endif; ?>
              <div class="subscribe-us clearfix">
                  <?php $copy_right_text = get_field('copy_right_text','options');
                   if($copy_right_text): ?>
                   <p class="copyright"><?php echo  $copy_right_text; ?></p>
                 <?php endif; ?>
              </div>
         </div>
		<a href="#top" class="scroll-top">go top</a>
    </div>
</section>

		<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ldc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <?php $favicon_upload = get_field('favicon_upload','options');

  if($favicon_upload): ?>
	<link rel="shortcut icon" href="<?php echo $favicon_upload['url']; ?>" type="image/x-icon" />
  <?php endif; ?>


	<?php wp_head(); ?>

  <style> 

  .idc-collector, .ldc-banner,  .about-section {
    background-image: url(<?php $website_background_image =  get_field('website_background_image','options'); echo $website_background_image['url']; ?>);
    }
 


</style>
</head>

<body <?php body_class(); ?>>

<!--banner slider section -->
<section id="home" class="banner-slider-initial">
		
        
         <!-- Navigation -->
         <div class="slider-header">
         <div class="container">
            <div class="middle-area"> 
                <div class="row">

             <!--Navigation - Center Logo header-->
             <div class="header">
                   <div class="mobile-ic">
                        <span></span>
                        <span></span>
                        <span></span>
                   </div>
                   <div class="responsive-menu">
                       	<?php wp_nav_menu(array(
                        	'theme_location'	=> 'res-menu',
                        	'container'			=> ' ',
                        )); ?>
                   </div>
                   <div class="table-cell left-menu">
                        <div class="left-top"> 
                            <?php $phone_number = get_field('phone_number','options');
                            if($phone_number): ?>
                             <a href="tel:<?php echo $phone_number; ?>"><span class="phone-icon" ></span><?php echo $phone_number; ?></a>
                            <?php endif; ?>

                            <?php $email_address = get_field('email_address','options');
                            if($email_address): ?>
                             <a href="mailto:<?php echo $email_address; ?>"><span class="envelop-icon" ></span><?php echo $email_address; ?></a>
                              <?php endif; ?>


                        </div>
                        <?php wp_nav_menu(array(
                        	'theme_location'	=> 'left-menu',
                        	'container'			=> ' ',
                        )); ?>
                      <!--  <ul>
                          <li class="active"><a href="#home" title="Home">Home</a></li>
                          <li><a href="#about" title="Aboutus">About us</a></li>
                        </ul> -->
                   </div>
                   <div class="logo">
                      <?php $header_logo_upload = get_field('header_logo_upload','options');

                     if($header_logo_upload): ?>
                        <a href="<?php echo home_url(); ?>" title="Barber Shop"><img src="<?php echo  $header_logo_upload['url']; ?>" alt="<?php echo  $header_logo_upload['title']; ?>"></a>
                      <?php endif; ?>

                   </div>
                   <div class="table-cell right-menu">

                      <?php $view_cart_button = get_field('view_cart_button','options');

                     if($view_cart_button): ?>
                        <div class="right-top"> 




                            <a href="<?php echo home_url(); ?>/cart">View Cart  <span class="cart-icon"   ></span></a>
                  







                        </div>
                      <?php endif; ?>

                        <div class="right-bottom"> 
                       	<?php wp_nav_menu(array(
                        	'theme_location'	=> 'right-menu',
                        	'container'			=> ' ',
                        )); ?>
                          
                        </div>
                   </div>
                  

               </div>

           </div>
            </div>
        

      <!-- search form -->
    <?php $search_icon = get_field('search_icon','options');

       if($search_icon): ?>
      <a class="search-icon" id="search-trigger" href="#search"></a>

      <?php endif; ?>

        <div id="search">
          <button type="button" class="close">×</button>
          <form>
            <input type="search" value="" placeholder="Type to search..." />
            <input type="submit" value="Search">
          </form>
        </div>
        <!-- search form -->
          </div>
       	</div>
</section>
<?php if(!is_front_page()): ?>
<div class="page-top"></div>
<?php endif; ?>
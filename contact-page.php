<?php  
/*
Template Name: Contact Page
*/
get_header(); ?>
 
<section class="about-section"> 
  <div class="overlay">
    <div class="container">
      <div class="middle-area">
          <div class="top-about"> 
              <div class="name-about"> 
                 <?php $page_title = get_field('page_title'); 
                  if($page_title): ?> 
                  <h2><?php echo $page_title; ?></h2>
                  <?php endif; ?>
              </div>
              <div class="bread-crumbs"> 
                   <a href="<?php echo home_url(); ?>">Home</a> <a href="<?php the_permalink(); ?>"><?php wp_title() ?></a>
              </div>
          </div>

          <div class="row"> 
              <div class="col-md-6 left-area-cont"> 
                  <div class="title-area contact-title"> 

                    <?php $left_title = get_field('left_title');

                        if($left_title):

                          echo $left_title; ?>

                      <div class="border-title"></div>

                      <?php  endif; ?>
                 </div>
                 <div class="content-contact"> 
                  <?php $contact_description = get_field('contact_description');

                        if($contact_description):

                          echo $contact_description;

                        endif; ?>
                     
                 </div>
                  <div class="address">
                      <?php $mobile_number = get_field('mobile_number');
                      if($mobile_number):  ?>
                      <h2 class="number"><?php echo $mobile_number; ?></h2>
                      <?php endif; ?>

                       <?php $email_address = get_field('email_address');
                      if($email_address):  ?>
                      <h2 class="email"><?php echo $email_address; ?></h2>
                      <?php endif; ?>

                       <?php $address = get_field('address');
                      if($address):  ?>
                      <h2 class="addresses"><?php echo $address; ?></h2>
                      <?php endif; ?>

                  </div>
              </div>
               <div class="col-md-6 right-area-cont"> 
                   <div class="contact-form"> 
                     
                      <?php $contact_form = get_field('contact_form');
                      if($contact_form):  ?>
                      
                      <?php echo $contact_form; ?>

                      <?php endif; ?>


                   </div>
              </div>
          </div>
          
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
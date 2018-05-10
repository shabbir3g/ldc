<?php  
/*
Template Name: About Page
*/
get_header(); ?>

<section class="about-section">
  <div class="overlay"> 
    <div class="container">
      <div class="middle-area">
          <div class="top-about"> 
              <div class="name-about">
                <?php $biography_name = get_field('biography_name'); 
                  if($biography_name): ?> 
                  <h2><?php echo $biography_name; ?></h2>
                <?php endif; ?>
              </div>
              <div class="bread-crumbs"> 
                  <a href="<?php echo home_url(); ?>">Home</a> <a href="<?php the_permalink(); ?>"><?php wp_title() ?></a>
              </div>
          </div>

          <div class="about-page-content"> 
              <div class="row"> 
                  <div class="col-md-4 about-image">

                    <?php $first_image = get_field('first_image'); 
                      if($first_image): ?> 
                        <div class="image-box">
                          <div class="blur-image"></div>
                            <img src="<?php echo $first_image['url'] ?>" alt="<?php echo $first_image['title'] ?>">
                         </div>
                   <?php endif; ?>

                  </div>
                   <div class="col-md-8 about-content"> 
                        <?php $first_content = get_field('first_content');

                        if($first_content):

                          echo $first_content;

                        endif; ?>
                       
                  </div>
              </div>
              <div class="row"> 
                   <div class="col-md-8 about-content"> 
                      <?php $second_content = get_field('second_content');

                        if($second_content):

                          echo $second_content;

                        endif; ?>
                      
                  </div>
                  <div class="col-md-4 about-image"> 
                      <?php $second_image = get_field('second_image'); 
                        if($second_image): ?> 
                            <div class="image-box">
                              <div class="blur-image"></div>
                              <img src="<?php echo $second_image['url'] ?>" alt="<?php echo $second_image['title'] ?>">
                         </div>
                      <?php endif; ?>
                  </div>
              </div>
              <div class="row"> 
                  <div class="col-md-4 about-image"> 
                        <?php $third_image = get_field('third_image'); 
                          if($third_image): ?> 
                            <div class="image-box">
                              <div class="blur-image"></div>
                             <img src="<?php echo $third_image['url'] ?>" alt="<?php echo $third_image['title'] ?>">
                         </div>
                      <?php endif; ?>
                  </div>
                   <div class="col-md-8 about-content"> 
                      <?php $third_content = get_field('third_content');

                        if($third_content):

                          echo $third_content;

                        endif; ?>
                       
                  </div>
              </div>

          </div>
        


      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
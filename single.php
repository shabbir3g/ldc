<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ldc
 */

get_header();
?>

<div class="idc-product single-pagecont"> 
  <div class="container">
	<div class="middle-area"> 
		<div class="row"> 
			<div class="col-md-12">
				<?php while(have_posts()): the_post(); ?>
				<div class="single-blog"> 

				      <div class="blog-image"> 
				          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				      </div>
				      <div class="product-cont-top"> 
				          <div class="porduct-name"> 
				              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				          </div>
				      </div>
				      <div class="blog-descrip"> 
				          <?php  the_content(); ?>
				      </div>
				  </div>
				<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();

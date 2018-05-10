<?php
/**
 * ldc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ldc
 */

if ( ! function_exists( 'ldc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ldc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ldc, use a find and replace
		 * to change 'ldc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ldc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'left-menu' => esc_html__( 'Left Menu', 'ldc' ),
			'right-menu' => esc_html__( 'Right Menu', 'ldc' ),
			'res-menu' => esc_html__( 'Mobile Menu', 'ldc' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'ldc' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ldc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ldc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ldc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ldc_content_width', 640 );
}
add_action( 'after_setup_theme', 'ldc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ldc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ldc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ldc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ldc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ldc_scripts() {

         					                 	
    wp_enqueue_style( 'ldc-bootstrap', get_template_directory_uri() ."/css/bootstrap.min.css");
    wp_enqueue_style( 'ldc-style-sheets', get_template_directory_uri() ."/css/styles.css");

	wp_enqueue_style( 'ldc-style', get_stylesheet_uri() );

	

	wp_enqueue_script( 'ldc-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'ldc-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	
}
add_action( 'wp_enqueue_scripts', 'ldc_scripts' );



/**
 * Redux include
 */
// require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
// require get_template_directory() . '/inc/opt/sample/config.php';


/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Settings',
            'menu_title'  => 'Theme Settings',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 61,
            'icon_url'    => 'dashicons-layout'
        )
    );
}


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';


/*wocoomerce shortcode*/




remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10);

remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);

remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);

remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);


add_action('woocommerce_before_main_content',function(){ ?>

<div class="idc-product shop-page"> 
  <div class="container">
     <div class="middle-area"> 
<?php },9);

add_action('woocommerce_after_main_content',function(){ ?>
		</div>
	</div>
</div>
<?php },11);

add_action('woocommerce_before_shop_loop_item_title',function(){ ?>
		<div class="product-image"> 
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
<?php },10);

add_action('woocommerce_after_shop_loop_item_title',function(){ ?>
				<div class="product-cont-top"> 
                      <div class="porduct-name"> 
                          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                      </div>
                      <div class="porduct-review"> 
                         <!-- <ul>
                            <li><i class="star-icon"></i></li>
                            <li><i class="star-icon"></i></li>
                            <li><i class="star-icon"></i></li>
                            <li><i class="star-icon"></i></li>
                            <li><i class="star-icon"></i></li>
                          </ul> -->
							
					<?php		global $product;

					if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
						return;
					}

					echo wc_get_rating_html( $product->get_average_rating() ); ?>

                      </div>
                  </div>
                  <div class="product-descrip"> 
                  	<p><?php echo wp_trim_words(get_the_content(), 10, false); ?></p>
                      
                  </div>
                  <div class="product-add-tocart"> 
                      <div class="product-price"> 
                        <p>Pewter <?php global $product; echo $product->get_price_html();; ?> USD</p>
                      </div>
                      <div class="product-add-to-cart"> 
                        <!-- <a href="#">ADD TO CART</a> -->

						<?php 
					

              		global $product;

              		echo apply_filters( 'woocommerce_loop_add_to_cart_link',
              			sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
              				esc_url( $product->add_to_cart_url() ),
              				esc_attr( isset( $quantity ) ? $quantity : 1 ),
              				esc_attr( $product->get_id() ),
              				esc_attr( $product->get_sku() ),
              				esc_attr(  'btn btn-color-out btn-sm  product_type_simple add_to_cart_button ajax_add_to_cart' ),
              				esc_html( $product->add_to_cart_text() )
              			),
              		$product );

              	

						?>

                      </div>
                  </div>
<?php },10);




add_action('woocommerce_before_main_content',function(){ ?>

<section class="ldc-banner"> 
  <div class="overlay">
  <div class="container"> 
    <div class="middle-area">
    <div class="row"> 
        <div class="col-md-12"> 
        	<?php $page_top_heading = get_field('page_top_heading','options');
             if($page_top_heading): ?>
            	<h1 class="handmade"><?php echo $page_top_heading; ?></h1>
        	<?php endif; ?>

        </div>
    </div>
    <div class="row banner-box"> 


		<?php $header_coins = get_field('header_coins','options');
         if($header_coins): 

         foreach($header_coins as $coins): ?>

        <div class="col-md-3"> 
            <img src="<?php echo $coins['image']['url']; ?>" alt="<?php echo $coins['image']['title']; ?>">
             <a href="<?php echo $coins['link']['url']; ?>"><h2><?php echo $coins['link']['title']; ?></h2></a>
        </div>
        

        <?php endforeach;  endif; ?>




    </div>
    <div class="buy-now"> 
    <?php $buy_now = get_field('buy_now','options');
         if($buy_now): ?>
      <a href="<?php echo $buy_now['url']; ?>"><?php echo $buy_now['title']; ?></a>
     <?php endif; ?>
    </div>
    <?php $welcome_text = get_field('welcome_text','options');
         if($welcome_text): ?>
    <div class="line-yellow"> 
      <span class="yellow-line"></span>
    </div>
    <div class="welcome-temple"> 

    <?php echo $welcome_text; ?>
       
    </div>
      <?php endif; ?>
    </div>
  </div>
  </div>
</section>
<div class="idc-collector"> 
  <div class="overlay">
  <div class="container"> 
     <div class="middle-area"> 
         <div class="row"> 
          <div class="col-md-6 left-text">
          	<?php $left_text = get_field('left_text','options');
          	     if($left_text): ?>
          	 	<?php echo $left_text; ?>
          	 <?php endif; ?>
             
          </div>

           <div class="col-md-6">
              <div class="collector-list"> 
              	<?php $right_text = get_field('right_text','options');
          	     if($right_text): ?>
          	 	<?php echo $right_text; ?>
          	 <?php endif; ?>
               
              
              </div>
           </div>
        </div>
     </div>
    </div>
   </div>
</div>

<?php },8);
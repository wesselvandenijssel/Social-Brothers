<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main role="main" id="skip_content" class="pt-3">

  <?php do_action( 'electo_store_above_slider' ); ?>

  <div class="container">
    <div class="row">
      <div class="<?php if (get_theme_mod('electo_store_coupon_text') != '' || get_theme_mod('electo_store_coupon_button_url') != '' || get_theme_mod('electo_store_coupon_button_text') != '' || get_theme_mod('electo_store_coupon_image') != '') { ?> col-lg-8 col-md-8<?php } else {?> col-lg-12 col-md-12<?php }?>">
        <?php if( get_theme_mod('electo_store_slider_hide', false) != '' || get_theme_mod( 'electo_store_display_slider',false) != ''){ ?>
          <section id="slider" class="m-auto p-0 mw-100">
            <?php $electo_store_slider_speed = get_theme_mod('electo_store_slider_speed', 3000); ?>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr($electo_store_slider_speed); ?>"> 
              <?php $electo_store_slider_page = array();
                for ( $count = 1; $count <= 4; $count++ ) {
                  $mod = intval( get_theme_mod( 'electo_store_slider_setting' . $count ));
                  if ( 'page-none-selected' != $mod ) {
                    $electo_store_slider_page[] = $mod;
                  }
                }
                if( !empty($electo_store_slider_page) ) :
                  $args = array(
                    'post_type' => 'page',
                    'post__in' => $electo_store_slider_page,
                    'orderby' => 'post__in'
                  );
                  $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  $i = 1;
              ?>     
              <div class="carousel-inner" role="listbox">
                <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                    <div class="slider-bg">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="carousel-caption">
                      <div class="inner_carousel">
                        <div class="carousel-content">
                          <?php if( get_theme_mod('electo_store_slider_heading',true) != ''){ ?>
                            <h1 class="mb-0"><?php the_title(); ?></h1>
                          <?php } ?>
                          <?php if( get_theme_mod('electo_store_slider_text',true) != ''){ ?>
                            <p><?php $excerpt = get_the_excerpt(); echo esc_html( electo_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('electo_store_slider_excerpt_number','15')))); ?></p>
                          <?php } ?>
                          <div class="more-btn mt-0 mt-md-3">
                            <a href="<?php the_permalink(); ?>"><?php esc_html_e('SHOP NOW','electo-store'); ?><i class="fas fa-chevron-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php $i++; endwhile; 
                wp_reset_postdata();?>
              </div>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php endif;
              endif;?>
              <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Previous','electo-store' );?></span>
              </a>
              <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Next','electo-store' );?></span>
              </a>
            </div>  
            <div class="clearfix"></div>
          </section>
        <?php }?>
      </div>
      <?php if (get_theme_mod('electo_store_coupon_text') != '' || get_theme_mod('electo_store_coupon_button_url') != '' || get_theme_mod('electo_store_coupon_button_text') != '' || get_theme_mod('electo_store_coupon_image') != '') { ?>
        <div class="col-lg-4 col-md-4">
          <div class="coupon-section">
            <div class="coupon-content">
              <?php if(get_theme_mod('electo_store_coupon_text') != ''){ ?>
                <h2><?php echo esc_html(get_theme_mod('electo_store_coupon_text')); ?></h2>
              <?php }?>
              <?php if(get_theme_mod('electo_store_coupon_button_url') != ''){ ?>
                <a href="<?php echo esc_url(get_theme_mod('electo_store_coupon_button_url')); ?>" class="coupon-btn"><?php echo esc_html(get_theme_mod('electo_store_coupon_button_text')); ?></a>
              <?php }?>
            </div>
            <?php if(get_theme_mod('electo_store_coupon_image') != ''){ ?>
              <img src="<?php echo esc_url(get_theme_mod('electo_store_coupon_image')); ?>" alt="<?php echo esc_attr('Coupon Image', 'electo-store'); ?>">
            <?php }?>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
  
  <?php do_action( 'electo_store_below_slider' ); ?>

  <?php if( get_theme_mod( 'electo_store_featured_enable') != '') { ?>
    <section id="featured-coupon">
      <div class="container">
        <div class="featured-head">
          <?php if(get_theme_mod('electo_store_featured_section_title') != '') {?>
            <h3><?php echo esc_html(get_theme_mod('electo_store_featured_section_title')); ?></h2>
          <?php }?>
          <?php if(get_theme_mod('electo_store_featured_text') != '') {?>
            <p class="section-text"><?php echo esc_html(get_theme_mod('electo_store_featured_text')); ?></p>
          <?php }?>
        </div>
        <div class="row">
          <?php 
            $catData = get_theme_mod('electo_store_featured_coupons');
            if($catData){              
            $page_query = new WP_Query(array(  'category_name' => esc_html( $catData ,'electo-store')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?> 
              <div class="col-lg-4 col-md-6">
                <div class="text-content">
                  <div class="imagebox">
                    <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                  </div>
                  <div class="featured-cat"><?php the_category(); ?></div>
                  <div class="featured-content text-start">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php if( get_post_meta($post->ID, 'electo_store_date', true) ) {?>
                      <div class="meta-feilds">
                        <?php if( get_post_meta($post->ID, 'electo_store_date', true) ) {?>
                          <span><span class="first-word"><?php esc_html_e('Expire :','electo-store'); ?></span> <?php echo esc_html(get_post_meta($post->ID,'electo_store_date',true)); ?></span>
                        <?php }?>
                      </div>
                    <?php }?>
                    <div class="show-btn text-center">
                      <a href="<?php the_permalink(); ?>"><i class="fas fa-cut me-3"></i><?php echo esc_html('Show Coupon', 'electo-store'); ?><span class="screen-reader-text"><?php echo esc_html('Show Coupon', 'electo-store'); ?></span></a>
                    </div>
                  </div>
                </div>
              </div>             
            <?php endwhile;
            wp_reset_postdata();
            }?>
          <div class="clearfix"></div>
        </div>  
      </div>
    </section>
  <?php } ?> 

  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>
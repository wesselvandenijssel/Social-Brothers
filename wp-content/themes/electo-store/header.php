<?php
/**
 * The Header for our theme.
 * @package Electo Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('electo_store_preloader',false) != '' || get_theme_mod( 'electo_store_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner" class="header-box">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'electo-store' ); ?></a>
    
    <div id="header">
      <div class="menu-header">
        <div class="row">
          <div class="col-lg-3 col-md-4 align-self-center">
            <div class="logo pb-3 pb-md-0 ps-md-5 ms-lg-5 align-self-center text-md-start text-center">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'electo_store_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod( 'electo_store_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('electo_store_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('electo_store_site_tagline_enable',true) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 align-self-center">
            <div class="top-header pe-md-5">
              <div class="row me-lg-5">
                <div class="col-lg-6 col-md-6 align-self-center">
                  <div class="social-icons mb-2 mb-md-0">
                    <?php if ( get_theme_mod('electo_store_facebook_link','') != "" ) {?>
                      <a href="<?php echo esc_attr( get_theme_mod('electo_store_facebook_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('electo_store_facebook_icon','fab fa-facebook-f')); ?> me-3"></i></a>
                    <?php }?>
                    <?php if ( get_theme_mod('electo_store_twitter_link','') != "" ) {?>
                      <a href="<?php echo esc_attr( get_theme_mod('electo_store_twitter_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('electo_store_twitter_icon','fab fa-twitter')); ?> me-3"></i></a>
                    <?php }?>
                    <?php if ( get_theme_mod('electo_store_linkdin_link','') != "" ) {?>
                      <a href="<?php echo esc_attr( get_theme_mod('electo_store_linkdin_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('electo_store_linkdin_icon','fab fa-linkedin-in')); ?> me-3"></i></a>
                    <?php }?>
                    <?php if ( get_theme_mod('electo_store_instagram_link','') != "" ) {?>
                      <a href="<?php echo esc_attr( get_theme_mod('electo_store_instagram_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('electo_store_instagram_icon','fab fa-instagram')); ?> me-3"></i></a>
                    <?php }?>
                    <?php if ( get_theme_mod('electo_store_pintrest_link','') != "" ) {?>
                      <a href="<?php echo esc_attr( get_theme_mod('electo_store_pintrest_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('electo_store_pintrest_icon','fab fa-pinterest-p')); ?>"></i></a>
                    <?php }?>
                  </div> 
                </div>
                <div class="col-lg-4 col-md-3 align-self-center text-md-end text-center">
                  <?php if(class_exists('woocommerce')){ ?>
                    <span class="cart_no">              
                      <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-cart"></i><span class="screen-reader-text"><?php esc_html_e( 'Cart item','electo-store' );?></span></a>
                      <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
                    </span>
                  <?php } ?>
                </div>
                <div class="col-lg-2 col-md-3 align-self-center text-md-end text-center">
                  <?php if(class_exists('woocommerce')){ ?>
                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="login-link"><i class="fas fa-sign-in-alt me-2"></i><?php esc_html_e('Login','electo-store'); ?><span class="screen-reader-text"><?php esc_html_e( 'Login','electo-store' );?></span></a>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="menu-section pe-md-5">
              <div class="row me-lg-5">
                <div class="col-lg-8 col-md-6 col-3">
                  <?php
                  if(has_nav_menu('primary')){ ?>
                    <div class="toggle-menu responsive-menu">
                      <button role="tab" onclick="electo_store_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('electo_store_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','electo-store'); ?></span>
                      </button>
                    </div>
                  <?php }?>
                  <div id="navbar-header text-center" class="menu-brand primary-nav">
                    <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'electo-store' ); ?>">
                      <?php
                        if(has_nav_menu('primary')){
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0 text-start">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        } 
                      ?>
                    </nav>
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="electo_store_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('electo_store_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','electo-store'); ?></span></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 align-self-center">
                  <div class="menu-search">
                    <?php get_search_form(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
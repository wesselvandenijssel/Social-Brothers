<?php

	/*---------------------------Width Layout -------------------*/
	$electo_store_theme_lay = get_theme_mod( 'electo_store_width_layout_options','Default');
    if($electo_store_theme_lay == 'Default'){
		$electo_store_custom_css .='body{';
			$electo_store_custom_css .='max-width: 100%;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Container Layout'){
		$electo_store_custom_css .='body{';
			$electo_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Box Layout'){
		$electo_store_custom_css .='body{';
			$electo_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$electo_store_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$electo_store_theme_lay = get_theme_mod( 'electo_store_slider_content_layout','Left');
    if($electo_store_theme_lay == 'Left'){
		$electo_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$electo_store_custom_css .='text-align:left;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Center'){
		$electo_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$electo_store_custom_css .='text-align:center;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Right'){
		$electo_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$electo_store_custom_css .='text-align:right;';
		$electo_store_custom_css .='}';
	}

	/*------------ Slider Opacity -------------------*/
	$electo_store_theme_lay = get_theme_mod( 'electo_store_slider_opacity','0.7');
	if($electo_store_theme_lay == '0'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.1'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.1';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.2'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.2';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.3'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.3';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.4'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.4';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.5'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.5';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.6'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.6';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.7'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.7';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.8'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.8';
	$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == '0.9'){
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='opacity:0.9';
	$electo_store_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$electo_store_footer_text_align = get_theme_mod('electo_store_footer_text_align');
	$electo_store_custom_css .='.copyright-wrapper{';
		$electo_store_custom_css .='text-align: '.esc_attr($electo_store_footer_text_align).';';
	$electo_store_custom_css .='}';

	$electo_store_footer_text_padding = get_theme_mod('electo_store_footer_text_padding');
	$electo_store_custom_css .='.copyright-wrapper{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_footer_text_padding).'px; padding-bottom: '.esc_attr($electo_store_footer_text_padding).'px;';
	$electo_store_custom_css .='}';

	$electo_store_footer_bg_color = get_theme_mod('electo_store_footer_bg_color');
	$electo_store_custom_css .='.footer-wp{';
		$electo_store_custom_css .='background-color: '.esc_attr($electo_store_footer_bg_color).';';
	$electo_store_custom_css .='}';

	$electo_store_footer_bg_image = get_theme_mod('electo_store_footer_bg_image');
	if($electo_store_footer_bg_image != false){
		$electo_store_custom_css .='.footer-wp{';
			$electo_store_custom_css .='background: url('.esc_attr($electo_store_footer_bg_image).');';
		$electo_store_custom_css .='}';
	}

	$electo_store_copyright_text_font_size = get_theme_mod('electo_store_copyright_text_font_size', 15);
	$electo_store_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$electo_store_custom_css .='font-size: '.esc_attr($electo_store_copyright_text_font_size).'px;';
	$electo_store_custom_css .='}';

	/*------------- Back to Top  -------------------*/
	$electo_store_back_to_top_border_radius = get_theme_mod('electo_store_back_to_top_border_radius');
	$electo_store_custom_css .='#scrollbutton i{';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_back_to_top_border_radius).'px;';
	$electo_store_custom_css .='}';

	$electo_store_scroll_icon_font_size = get_theme_mod('electo_store_scroll_icon_font_size', 22);
	$electo_store_custom_css .='#scrollbutton i{';
		$electo_store_custom_css .='font-size: '.esc_attr($electo_store_scroll_icon_font_size).'px;';
	$electo_store_custom_css .='}';

	$electo_store_top_bottom_scroll_padding = get_theme_mod('electo_store_top_bottom_scroll_padding', 12);
	$electo_store_custom_css .='#scrollbutton i{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($electo_store_top_bottom_scroll_padding).'px;';
	$electo_store_custom_css .='}';

	$electo_store_left_right_scroll_padding = get_theme_mod('electo_store_left_right_scroll_padding', 17);
	$electo_store_custom_css .='#scrollbutton i{';
		$electo_store_custom_css .='padding-left: '.esc_attr($electo_store_left_right_scroll_padding).'px; padding-right: '.esc_attr($electo_store_left_right_scroll_padding).'px;';
	$electo_store_custom_css .='}';

	/*-------------- Post Button  -------------------*/
	$electo_store_post_button_padding_top = get_theme_mod('electo_store_post_button_padding_top');
	$electo_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_post_button_padding_top).'px; padding-bottom: '.esc_attr($electo_store_post_button_padding_top).'px;';
	$electo_store_custom_css .='}';

	$electo_store_post_button_padding_right = get_theme_mod('electo_store_post_button_padding_right');
	$electo_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$electo_store_custom_css .='padding-left: '.esc_attr($electo_store_post_button_padding_right).'px; padding-right: '.esc_attr($electo_store_post_button_padding_right).'px;';
	$electo_store_custom_css .='}';

	$electo_store_post_button_border_radius = get_theme_mod('electo_store_post_button_border_radius');
	$electo_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_post_button_border_radius).'px;';
	$electo_store_custom_css .='}';

	$electo_store_post_comment_enable = get_theme_mod('electo_store_post_comment_enable',true);
	if($electo_store_post_comment_enable == false){
		$electo_store_custom_css .='#comments{';
			$electo_store_custom_css .='display: none;';
		$electo_store_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$electo_store_preloader_bg_color_option = get_theme_mod('electo_store_preloader_bg_color_option');
	$electo_store_preloader_icon_color_option = get_theme_mod('electo_store_preloader_icon_color_option');
	$electo_store_custom_css .='.frame{';
		$electo_store_custom_css .='background-color: '.esc_attr($electo_store_preloader_bg_color_option).';';
	$electo_store_custom_css .='}';
	$electo_store_custom_css .='.dot-1,.dot-2,.dot-3{';
		$electo_store_custom_css .='background-color: '.esc_attr($electo_store_preloader_icon_color_option).';';
	$electo_store_custom_css .='}';

	// preloader type
	$electo_store_theme_lay = get_theme_mod( 'electo_store_preloader_type','First Preloader Type');
    if($electo_store_theme_lay == 'First Preloader Type'){
		$electo_store_custom_css .='.dot-1, .dot-2, .dot-3{';
			$electo_store_custom_css .='';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Second Preloader Type'){
		$electo_store_custom_css .='.dot-1, .dot-2, .dot-3{';
			$electo_store_custom_css .='border-radius:0;';
		$electo_store_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$electo_store_theme_lay = get_theme_mod( 'electo_store_background_skin','Without Background');
    if($electo_store_theme_lay == 'With Background'){
		$electo_store_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$electo_store_custom_css .='background-color: #fff; padding:20px;';
		$electo_store_custom_css .='}';
		$electo_store_custom_css .='.login-box a{';
			$electo_store_custom_css .='background-color: #fff;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Without Background'){
		$electo_store_custom_css .='{';
			$electo_store_custom_css .='background-color: transparent;';
		$electo_store_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$electo_store_woocommerce_button_padding_top = get_theme_mod('electo_store_woocommerce_button_padding_top',12);
	$electo_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($electo_store_woocommerce_button_padding_top).'px;';
	$electo_store_custom_css .='}';
	

	$electo_store_woocommerce_button_padding_right = get_theme_mod('electo_store_woocommerce_button_padding_right',15);
	$electo_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$electo_store_custom_css .='padding-left: '.esc_attr($electo_store_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($electo_store_woocommerce_button_padding_right).'px;';
	$electo_store_custom_css .='}';

	$electo_store_woocommerce_button_border_radius = get_theme_mod('electo_store_woocommerce_button_border_radius',10);
	$electo_store_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_woocommerce_button_border_radius).'px;';
	$electo_store_custom_css .='}';

	$electo_store_related_product_enable = get_theme_mod('electo_store_related_product_enable',true);
	if($electo_store_related_product_enable == false){
		$electo_store_custom_css .='.related.products{';
			$electo_store_custom_css .='display: none;';
		$electo_store_custom_css .='}';
	}

	$electo_store_woocommerce_product_border_enable = get_theme_mod('electo_store_woocommerce_product_border_enable',true);
	if($electo_store_woocommerce_product_border_enable == false){
		$electo_store_custom_css .='.products li{';
			$electo_store_custom_css .='border: none;';
		$electo_store_custom_css .='}';
	}

	$electo_store_woocommerce_product_padding_top = get_theme_mod('electo_store_woocommerce_product_padding_top',10);
	$electo_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($electo_store_woocommerce_product_padding_top).'px !important;';
	$electo_store_custom_css .='}';

	$electo_store_woocommerce_product_padding_right = get_theme_mod('electo_store_woocommerce_product_padding_right',10);
	$electo_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$electo_store_custom_css .='padding-left: '.esc_attr($electo_store_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($electo_store_woocommerce_product_padding_right).'px !important;';
	$electo_store_custom_css .='}';

	$electo_store_woocommerce_product_border_radius = get_theme_mod('electo_store_woocommerce_product_border_radius',0);
	$electo_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_woocommerce_product_border_radius).'px;';
	$electo_store_custom_css .='}';

	$electo_store_woocommerce_product_box_shadow = get_theme_mod('electo_store_woocommerce_product_box_shadow', 5);
	$electo_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$electo_store_custom_css .='box-shadow: '.esc_attr($electo_store_woocommerce_product_box_shadow).'px '.esc_attr($electo_store_woocommerce_product_box_shadow).'px '.esc_attr($electo_store_woocommerce_product_box_shadow).'px #eee;';
	$electo_store_custom_css .='}';

	$electo_store_woo_product_sale_top_bottom_padding = get_theme_mod('electo_store_woo_product_sale_top_bottom_padding', 0);
	$electo_store_woo_product_sale_left_right_padding = get_theme_mod('electo_store_woo_product_sale_left_right_padding', 0);
	$electo_store_custom_css .='.woocommerce span.onsale{';
		$electo_store_custom_css .='padding-top: '.esc_attr($electo_store_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($electo_store_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($electo_store_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($electo_store_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$electo_store_custom_css .='}';

	$electo_store_woo_product_sale_border_radius = get_theme_mod('electo_store_woo_product_sale_border_radius',50);
	$electo_store_custom_css .='.woocommerce span.onsale {';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_woo_product_sale_border_radius).'px;';
	$electo_store_custom_css .='}';

	$electo_store_woo_product_sale_position = get_theme_mod('electo_store_woo_product_sale_position', 'Right');
	if($electo_store_woo_product_sale_position == 'Right' ){
		$electo_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electo_store_custom_css .=' left:auto; right:0;';
		$electo_store_custom_css .='}';
	}elseif($electo_store_woo_product_sale_position == 'Left' ){
		$electo_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electo_store_custom_css .=' left:0; right:auto;';
		$electo_store_custom_css .='}';
	}

	$electo_store_wooproduct_sale_font_size = get_theme_mod('electo_store_wooproduct_sale_font_size',14);
	$electo_store_custom_css .='.woocommerce span.onsale{';
		$electo_store_custom_css .='font-size: '.esc_attr($electo_store_wooproduct_sale_font_size).'px;';
	$electo_store_custom_css .='}';

	// Responsive Media
	$electo_store_post_date = get_theme_mod( 'electo_store_display_post_date',true);
	if($electo_store_post_date == true && get_theme_mod( 'electo_store_metafields_date',true) != true){
    	$electo_store_custom_css .='.metabox .entry-date{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_post_date == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.metabox .entry-date{';
			$electo_store_custom_css .='display:inline-block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_post_date == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.metabox .entry-date{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_post_author = get_theme_mod( 'electo_store_display_post_author',true);
	if($electo_store_post_author == true && get_theme_mod( 'electo_store_metafields_author',true) != true){
    	$electo_store_custom_css .='.metabox .entry-author{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_post_author == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.metabox .entry-author{';
			$electo_store_custom_css .='display:inline-block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_post_author == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.metabox .entry-author{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_post_comment = get_theme_mod( 'electo_store_display_post_comment',true);
	if($electo_store_post_comment == true && get_theme_mod( 'electo_store_metafields_comment',true) != true){
    	$electo_store_custom_css .='.metabox .entry-comments{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_post_comment == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.metabox .entry-comments{';
			$electo_store_custom_css .='display:inline-block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_post_comment == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.metabox .entry-comments{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_post_time = get_theme_mod( 'electo_store_display_post_time',false);
	if($electo_store_post_time == true && get_theme_mod( 'electo_store_metafields_time',false) != true){
    	$electo_store_custom_css .='.metabox .entry-time{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_post_time == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.metabox .entry-time{';
			$electo_store_custom_css .='display:inline-block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_post_time == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.metabox .entry-time{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	if($electo_store_post_date == false && $electo_store_post_author == false && $electo_store_post_comment == false && $electo_store_post_time == false){
		$electo_store_custom_css .='@media screen and (max-width:575px) {';
    	$electo_store_custom_css .='.metabox {';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_metafields_date = get_theme_mod( 'electo_store_metafields_date',true);
	$electo_store_metafields_author = get_theme_mod( 'electo_store_metafields_author',true);
	$electo_store_metafields_comment = get_theme_mod( 'electo_store_metafields_comment',true);
	$electo_store_metafields_time = get_theme_mod( 'electo_store_metafields_time',true);
	if($electo_store_metafields_date == false && $electo_store_metafields_author == false && $electo_store_metafields_comment == false && $electo_store_metafields_time == false){
		$electo_store_custom_css .='@media screen and (min-width:576px) {';
    	$electo_store_custom_css .='.metabox {';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_slider = get_theme_mod( 'electo_store_display_slider',false);
	if($electo_store_slider == true && get_theme_mod( 'electo_store_slider_hide', false) == false){
    	$electo_store_custom_css .='#slider{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_slider == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='#slider{';
			$electo_store_custom_css .='display:block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_slider == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='#slider{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_sidebar = get_theme_mod( 'electo_store_display_sidebar',true);
    if($electo_store_sidebar == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='#sidebar{';
			$electo_store_custom_css .='display:block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_sidebar == false){
		$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='#sidebar{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_scroll = get_theme_mod( 'electo_store_display_scrolltop',true);
	if($electo_store_scroll == true && get_theme_mod( 'electo_store_hide_show_scroll',true) != true){
    	$electo_store_custom_css .='#scrollbutton i{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_scroll == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='#scrollbutton i{';
			$electo_store_custom_css .='display:block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_scroll == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='#scrollbutton i{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_preloader = get_theme_mod( 'electo_store_display_preloader',false);
	if($electo_store_preloader == true && get_theme_mod( 'electo_store_preloader',false) == false){
		$electo_store_custom_css .='@media screen and (min-width:575px) {';
    	$electo_store_custom_css .='.frame{';
			$electo_store_custom_css .=' visibility: hidden;';
		$electo_store_custom_css .='} }';
	}
    if($electo_store_preloader == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.frame{';
			$electo_store_custom_css .='visibility:visible;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_preloader == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.frame{';
			$electo_store_custom_css .='visibility: hidden;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_search = get_theme_mod( 'electo_store_display_search_category',true);
	if($electo_store_search == true && get_theme_mod( 'electo_store_search_enable_disable',true) != true){
    	$electo_store_custom_css .='.search-cat-box{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_search == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.search-cat-box{';
			$electo_store_custom_css .='display:block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_search == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.search-cat-box{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	$electo_store_myaccount = get_theme_mod( 'electo_store_display_myaccount',true);
	if($electo_store_myaccount == true && get_theme_mod( 'electo_store_myaccount_enable_disable',true) != true){
    	$electo_store_custom_css .='.login-box{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} ';
	}
    if($electo_store_myaccount == true){
    	$electo_store_custom_css .='@media screen and (max-width:575px) {';
		$electo_store_custom_css .='.login-box{';
			$electo_store_custom_css .='display:block;';
		$electo_store_custom_css .='} }';
	}else if($electo_store_myaccount == false){
		$electo_store_custom_css .='@media screen and (max-width:575px){';
		$electo_store_custom_css .='.login-box{';
			$electo_store_custom_css .='display:none;';
		$electo_store_custom_css .='} }';
	}

	// menu settings
	$electo_store_menu_font_size_option = get_theme_mod('electo_store_menu_font_size_option');
	$electo_store_custom_css .='.primary-navigation a{';
		$electo_store_custom_css .='font-size: '.esc_attr($electo_store_menu_font_size_option).'px;';
	$electo_store_custom_css .='}';

	$electo_store_menu_padding = get_theme_mod('electo_store_menu_padding');
	$electo_store_custom_css .='.primary-navigation a{';
		$electo_store_custom_css .='padding: '.esc_attr($electo_store_menu_padding).'px;';
	$electo_store_custom_css .='}';

	$electo_store_theme_lay = get_theme_mod( 'electo_store_text_tranform_menu','Uppercase');
    if($electo_store_theme_lay == 'Uppercase'){
		$electo_store_custom_css .='.primary-navigation a{';
			$electo_store_custom_css .='';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Lowercase'){
		$electo_store_custom_css .='.primary-navigation a{';
			$electo_store_custom_css .='text-transform: lowercase;';
		$electo_store_custom_css .='}';
	}
	else if($electo_store_theme_lay == 'Capitalize'){
		$electo_store_custom_css .='.primary-navigation a{';
			$electo_store_custom_css .='text-transform: Capitalize;';
		$electo_store_custom_css .='}';
	}

	$electo_store_theme_lay = get_theme_mod( 'electo_store_font_weight_option_menu','');
    if($electo_store_theme_lay == 'Bold'){
		$electo_store_custom_css .='.primary-navigation a{';
			$electo_store_custom_css .='font-weight:bold;';
		$electo_store_custom_css .='}';
	}else if($electo_store_theme_lay == 'Normal'){
		$electo_store_custom_css .='.primary-navigation a{';
			$electo_store_custom_css .='font-weight: normal;';
		$electo_store_custom_css .='}';
	}

	// slider height
	$electo_store_option_slider_height = get_theme_mod('electo_store_option_slider_height');
	$electo_store_custom_css .='#slider .slider-bg img{';
		$electo_store_custom_css .='height: '.esc_attr($electo_store_option_slider_height).'px;';
	$electo_store_custom_css .='}';

	// slider content spacing
	$electo_store_slider_content_top_padding = get_theme_mod('electo_store_slider_content_top_padding');
	$electo_store_slider_content_left_padding = get_theme_mod('electo_store_slider_content_left_padding');
	$electo_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$electo_store_custom_css .='top: '.esc_attr($electo_store_slider_content_top_padding).'%; bottom: '.esc_attr($electo_store_slider_content_top_padding).'%;left: '.esc_attr($electo_store_slider_content_left_padding).'%;right: '.esc_attr($electo_store_slider_content_left_padding).'%;';
	$electo_store_custom_css .='}';

	// slider overlay
	$electo_store_enable_slider_overlay = get_theme_mod('electo_store_enable_slider_overlay', true);
	if($electo_store_enable_slider_overlay == false){
		$electo_store_custom_css .='#slider image{';
			$electo_store_custom_css .='opacity:1;';
		$electo_store_custom_css .='}';
	} 
	$electo_store_slider_overlay_color = get_theme_mod('electo_store_slider_overlay_color', true);
	if($electo_store_enable_slider_overlay != false){
		$electo_store_custom_css .='#slider{';
			$electo_store_custom_css .='background: '.esc_attr($electo_store_slider_overlay_color).';';
		$electo_store_custom_css .='}';
	}

	//  comment form width
	$electo_store_comment_form_width = get_theme_mod( 'electo_store_comment_form_width');
	$electo_store_custom_css .='#comments textarea{';
		$electo_store_custom_css .='width: '.esc_attr($electo_store_comment_form_width).'%;';
	$electo_store_custom_css .='}';

	$electo_store_title_comment_form = get_theme_mod('electo_store_title_comment_form', 'Leave a Reply');
	if($electo_store_title_comment_form == ''){
		$electo_store_custom_css .='#comments h2#reply-title {';
			$electo_store_custom_css .='display: none;';
		$electo_store_custom_css .='}';
	}

	$electo_store_comment_form_button_content = get_theme_mod('electo_store_comment_form_button_content', 'Post Comment');
	if($electo_store_comment_form_button_content == ''){
		$electo_store_custom_css .='#comments p.form-submit {';
			$electo_store_custom_css .='display: none;';
		$electo_store_custom_css .='}';
	}

	// featured image setting
	$electo_store_image_border_radius = get_theme_mod('electo_store_image_border_radius', 0);
	$electo_store_custom_css .='.box-image img, .content_box img{';
		$electo_store_custom_css .='border-radius: '.esc_attr($electo_store_image_border_radius).'%;';
	$electo_store_custom_css .='}';

	$electo_store_image_box_shadow = get_theme_mod('electo_store_image_box_shadow',0);
	$electo_store_custom_css .='.box-image img, .content_box img{';
		$electo_store_custom_css .='box-shadow: '.esc_attr($electo_store_image_box_shadow).'px '.esc_attr($electo_store_image_box_shadow).'px '.esc_attr($electo_store_image_box_shadow).'px #b5b5b5;';
	$electo_store_custom_css .='}';

	// Post Block
	$electo_store_post_block_option = get_theme_mod( 'electo_store_post_block_option','By Block');
    if($electo_store_post_block_option == 'By Without Block'){
		$electo_store_custom_css .='.inner-service, #blog_sec .sticky{';
			$electo_store_custom_css .='border:none; margin:30px 0;';
		$electo_store_custom_css .='}';
	}

	// post image 
	$electo_store_post_featured_color = get_theme_mod('electo_store_post_featured_color', '#5c727d');
	$electo_store_post_featured_image = get_theme_mod('electo_store_post_featured_image','Image');
	if($electo_store_post_featured_image == 'Color'){
		$electo_store_custom_css .='.post-color{';
			$electo_store_custom_css .='background-color: '.esc_attr($electo_store_post_featured_color).';';
		$electo_store_custom_css .='}';
	}

	// featured image dimention
	$electo_store_post_featured_image_dimention = get_theme_mod('electo_store_post_featured_image_dimention', 'Default');
	$electo_store_post_featured_image_custom_width = get_theme_mod('electo_store_post_featured_image_custom_width');
	$electo_store_post_featured_image_custom_height = get_theme_mod('electo_store_post_featured_image_custom_height');
	if($electo_store_post_featured_image_dimention == 'Custom'){
		$electo_store_custom_css .='.box-image img{';
			$electo_store_custom_css .='width: '.esc_attr($electo_store_post_featured_image_custom_width).'px; height: '.esc_attr($electo_store_post_featured_image_custom_height).'px;';
		$electo_store_custom_css .='}';
	}

	// featured image dimention
	$electo_store_custom_post_color_width = get_theme_mod('electo_store_custom_post_color_width');
	$electo_store_custom_post_color_height = get_theme_mod('electo_store_custom_post_color_height');
	if($electo_store_post_featured_image == 'Color'){
		$electo_store_custom_css .='.post-color{';
			$electo_store_custom_css .='width: '.esc_attr($electo_store_custom_post_color_width).'px; height: '.esc_attr($electo_store_custom_post_color_height).'px;';
		$electo_store_custom_css .='}';
	}

	// site title font size
	$electo_store_site_title_font_size = get_theme_mod('electo_store_site_title_font_size', 30);
	$electo_store_custom_css .='.logo h1, .site-title a, .logo .site-title a{';
	$electo_store_custom_css .='font-size: '.esc_attr($electo_store_site_title_font_size).'px;';
	$electo_store_custom_css .='}';

	// site tagline font size
	$electo_store_site_tagline_font_size = get_theme_mod('electo_store_site_tagline_font_size', 15);
	$electo_store_custom_css .='p.site-description{';
	$electo_store_custom_css .='font-size: '.esc_attr($electo_store_site_tagline_font_size).'px;';
	$electo_store_custom_css .='}';

	// woocommerce Product Navigation
	$electo_store_wooproducts_nav = get_theme_mod('electo_store_wooproducts_nav', 'Yes');
	if($electo_store_wooproducts_nav == 'No'){
		$electo_store_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$electo_store_custom_css .='display: none;';
		$electo_store_custom_css .='}';
	}
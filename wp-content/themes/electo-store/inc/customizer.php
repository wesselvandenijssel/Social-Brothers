<?php
/**
 * Electo Store Theme Customizer
 * @package Electo Store
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function electo_store_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'electo_store_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','electo-store' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('electo_store_site_title_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_site_title_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Title','electo-store'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('electo_store_site_title_font_size',array(
		'default'=> 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','electo-store' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

    $wp_customize->add_setting('electo_store_site_tagline_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_site_tagline_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Tagline','electo-store'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('electo_store_site_tagline_font_size',array(
		'default'=> 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','electo-store' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

    $wp_customize->add_setting('electo_store_site_logo_inline',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_site_logo_inline',array(
       'type' => 'checkbox',
       'label' => __('Site logo inline with site title','electo-store'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('electo_store_background_skin',array(
        'default' => 'Without Background',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_background_skin',array(
        'type' => 'radio',
        'label' => __('Background Skin','electo-store'),
        'description' => __('Here you can add the background skin along with the background image.','electo-store'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background Skin','electo-store'),
            'Without Background' => __('Without Background Skin','electo-store'),
        ),
	) );

	//add home page setting pannel
	$wp_customize->add_panel( 'electo_store_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'electo-store' ),
	    'description' => __( 'Description of what this panel does.', 'electo-store' ),
	) );

	$electo_store_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One', 
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower', 
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit', 
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two', 
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda', 
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli', 
		'Marck Script'           => 'Marck Script', 
		'Noto Serif'             => 'Noto Serif', 
		'Open Sans'              => 'Open Sans', 
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen', 
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display', 
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik', 
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo', 
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two', 
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn', 
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('electo_store_typography', array(
		'title'    => __('Typography', 'electo-store'),
		'panel'    => 'electo_store_panel_id',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('electo_store_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_paragraph_color', array(
		'label'    => __('Paragraph Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('electo_store_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control(	'electo_store_paragraph_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('Paragraph Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	$wp_customize->add_setting('electo_store_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('electo_store_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_atag_color', array(
		'label'    => __('"a" Tag Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('electo_store_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control(	'electo_store_atag_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('"a" Tag Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('electo_store_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_li_color', array(
		'label'    => __('"li" Tag Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('electo_store_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control(	'electo_store_li_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('"li" Tag Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('electo_store_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h1_color', array(
		'label'    => __('H1 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control('electo_store_h1_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('H1 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('electo_store_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h1_font_size', array(
		'label'   => __('H1 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('electo_store_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h2_color', array(
		'label'    => __('h2 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control(
	'electo_store_h2_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('h2 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('electo_store_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h2_font_size', array(
		'label'   => __('H2 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('electo_store_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h3_color', array(
		'label'    => __('H3 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control(
	'electo_store_h3_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('H3 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('electo_store_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h3_font_size', array(
		'label'   => __('H3 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('electo_store_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h4_color', array(
		'label'    => __('H4 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control('electo_store_h4_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('H4 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('electo_store_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h4_font_size', array(
		'label'   => __('H4 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('electo_store_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h5_color', array(
		'label'    => __('H5 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control('electo_store_h5_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('H5 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('electo_store_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h5_font_size', array(
		'label'   => __('H5 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('electo_store_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_h6_color', array(
		'label'    => __('H6 Color', 'electo-store'),
		'section'  => 'electo_store_typography',
		'settings' => 'electo_store_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('electo_store_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control('electo_store_h6_font_family', array(
		'section' => 'electo_store_typography',
		'label'   => __('H6 Fonts', 'electo-store'),
		'type'    => 'select',
		'choices' => $electo_store_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('electo_store_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('electo_store_h6_font_size', array(
		'label'   => __('H6 Font Size', 'electo-store'),
		'section' => 'electo_store_typography',
		'setting' => 'electo_store_h6_font_size',
		'type'    => 'text',
	));

	//layout setting
	$wp_customize->add_section( 'electo_store_option', array(
    	'title'      => __( 'Layout Settings', 'electo-store' ),
    	'panel'    => 'electo_store_panel_id',
	) );

	$wp_customize->add_setting('electo_store_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','electo-store'),
       'section' => 'electo_store_option'
    ));

    $wp_customize->add_setting('electo_store_preloader_type',array(
        'default' => 'First Preloader Type',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Types','electo-store'),
        'section' => 'electo_store_option',
        'choices' => array(
            'First Preloader Type' => __('First Preloader Type','electo-store'),
            'Second Preloader Type' => __('Second Preloader Type','electo-store'),
        ),
	) );

	$wp_customize->add_setting('electo_store_preloader_bg_color_option', array(
		'default'           => '#fd4f46',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'electo-store'),
		'section'  => 'electo_store_option',
	)));

	$wp_customize->add_setting('electo_store_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'electo-store'),
		'section'  => 'electo_store_option',
	)));

	$wp_customize->add_setting('electo_store_width_layout_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_width_layout_options',array(
        'type' => 'radio',
        'label' => __('Container Box','electo-store'),
        'description' => __('Here you can change the Width layout. ','electo-store'),
        'section' => 'electo_store_option',
        'choices' => array(
            'Default' => __('Default','electo-store'),
            'Container Layout' => __('Container Layout','electo-store'),
            'Box Layout' => __('Box Layout','electo-store'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('electo_store_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	) );
	$wp_customize->add_control('electo_store_layout_options', array(
        'type' => 'select',
        'label' => __('Select different post sidebar layout','electo-store'),
        'section' => 'electo_store_option',
        'choices' => array(
            'One Column' => __('One Column','electo-store'),
            'Three Columns' => __('Three Columns','electo-store'),
            'Four Columns' => __('Four Columns','electo-store'),
            'Grid Layout' => __('Grid Layout','electo-store'),
            'Left Sidebar' => __('Left Sidebar','electo-store'),
            'Right Sidebar' => __('Right Sidebar','electo-store')
        ),
	)   );

	$wp_customize->add_setting('electo_store_sidebar_size',array(
        'default' => 'Sidebar 1/3',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_sidebar_size',array(
        'type' => 'radio',
        'label' => __('Sidebar Size Option','electo-store'),
        'section' => 'electo_store_option',
        'choices' => array(
            'Sidebar 1/3' => __('Sidebar 1/3','electo-store'),
            'Sidebar 1/4' => __('Sidebar 1/4','electo-store'),
        ),
	) );

	$wp_customize->add_setting( 'electo_store_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,  'electo_store_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','electo-store' ),
		'section'     => 'electo_store_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	)) );

	$wp_customize->add_setting( 'electo_store_image_box_shadow',array(
		'default' => 0,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,  'electo_store_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','electo-store' ),
		'section' => 'electo_store_option',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	)));

	//Blog Post Settings
	$wp_customize->add_section('electo_store_post_settings', array(
		'title'    => __('Post General Settings', 'electo-store'),
		'panel'    => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_post_layouts',array(
     'default' => 'Layout 1',
     'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control(new Electo_Store_Image_Radio_Control($wp_customize, 'electo_store_post_layouts', array(
        'type' => 'select',
        'label' => __('Post Layouts','electo-store'),
        'description' => __('Here you can change the 3 different layouts of post','electo-store'),
        'section' => 'electo_store_post_settings',
        'choices' => array(
            'Layout 1' => esc_url(get_template_directory_uri()).'/images/layout1.png',
            'Layout 2' => esc_url(get_template_directory_uri()).'/images/layout2.png',
            'Layout 3' => esc_url(get_template_directory_uri()).'/images/layout3.png',
    ))));

	$wp_customize->add_setting('electo_store_metafields_date',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Date ','electo-store'),
       'section' => 'electo_store_post_settings'
    ));

	$wp_customize->add_setting('electo_store_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_post_date_icon',array(
		'label'	=> __('Post Date Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electo_store_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','electo-store'),
       'section' => 'electo_store_post_settings'
    ));

    $wp_customize->add_setting('electo_store_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_post_author_icon',array(
		'label'	=> __('Post Author Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electo_store_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Comments','electo-store'),
       'section' => 'electo_store_post_settings'
    ));

    $wp_customize->add_setting('electo_store_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electo_store_metafields_time',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','electo-store'),
       'section' => 'electo_store_post_settings'
    ));

    $wp_customize->add_setting('electo_store_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_post_time_icon',array(
		'label'	=> __('Post Time Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_post_featured_image',array(
       'default' => 'Image',
       'sanitize_callback'	=> 'electo_store_sanitize_choices'
    ));
    $wp_customize->add_control('electo_store_post_featured_image',array(
       'type' => 'select',
       'label'	=> __('Post Image Options','electo-store'),
       'choices' => array(
            'Image' => __('Image','electo-store'),
            'Color' => __('Color','electo-store'),
            'None' => __('None','electo-store'),
        ),
      	'section'	=> 'electo_store_post_settings',
    ));

    $wp_customize->add_setting('electo_store_post_featured_color', array(
		'default'           => '#5c727d',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_post_featured_color', array(
		'label'    => __('Post Color', 'electo-store'),
		'section'  => 'electo_store_post_settings',
		'settings' => 'electo_store_post_featured_color',
		'active_callback' => 'electo_store_post_color_enabled'
	)));

	$wp_customize->add_setting( 'electo_store_custom_post_color_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_custom_post_color_width',	array(
		'label' => esc_html__( 'Color Post Custom Width','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'electo_store_show_post_color'
	)));

	$wp_customize->add_setting( 'electo_store_custom_post_color_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_custom_post_color_height',array(
		'label' => esc_html__( 'Color Post Custom Height','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'electo_store_show_post_color'
	)));

	$wp_customize->add_setting('electo_store_post_featured_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'electo_store_sanitize_choices'
    ));
    $wp_customize->add_control('electo_store_post_featured_image_dimention',array(
       'type' => 'select',
       'label'	=> __('Post Featured Image Dimention','electo-store'),
       'choices' => array(
            'Default' => __('Default','electo-store'),
            'Custom' => __('Custom','electo-store'),
        ),
      	'section'	=> 'electo_store_post_settings',
      	'active_callback' => 'electo_store_enable_post_featured_image'
    ));

    $wp_customize->add_setting( 'electo_store_post_featured_image_custom_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_post_featured_image_custom_width',	array(
		'label' => esc_html__( 'Post Featured Image Custom Width','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'electo_store_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'electo_store_post_featured_image_custom_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_post_featured_image_custom_height',	array(
		'label' => esc_html__( 'Post Featured Image Custom Height','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'electo_store_enable_post_image_custom_dimention'
	)));

    //Post excerpt
	$wp_customize->add_setting( 'electo_store_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'electo_store_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','electo-store' ),
		'section'     => 'electo_store_post_settings',
		'type'        => 'number',
		'settings'    => 'electo_store_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('electo_store_content_settings',array(
        'default' =>'Excerpt',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_content_settings',array(
        'type' => 'radio',
        'label' => __('Content Settings','electo-store'),
        'section' => 'electo_store_post_settings',
        'choices' => array(
            'Excerpt' => __('Excerpt','electo-store'),
            'Content' => __('Content','electo-store'),
        ),
	) );

	$wp_customize->add_setting( 'electo_store_post_discription_suffix', array(
		'default'   => __('[...]','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electo_store_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','electo-store' ),
		'section'     => 'electo_store_post_settings',
		'type'        => 'text',
		'settings'    => 'electo_store_post_discription_suffix',
	) );

	$wp_customize->add_setting( 'electo_store_blog_post_meta_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electo_store_blog_post_meta_seperator', array(
		'label'       => esc_html__( 'Meta Box','electo-store' ),
		'section'     => 'electo_store_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','electo-store'),
		'type'        => 'text',
		'settings'    => 'electo_store_blog_post_meta_seperator',
	) );

	$wp_customize->add_setting('electo_store_button_text',array(
		'default'=> __('View More','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_button_text',array(
		'label'	=> __('Add Button Text','electo-store'),
		'section'=> 'electo_store_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_button_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_button_icon',array(
		'label'	=> __('Button Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'electo_store_post_button_padding_top',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_post_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_post_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_post_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_post_button_border_radius',array(
		'default' => 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_post_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','electo-store' ),
		'section' => 'electo_store_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('electo_store_enable_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_enable_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Blog Page Pagination','electo-store'),
       'section' => 'electo_store_post_settings'
    ));

    $wp_customize->add_setting( 'electo_store_post_pagination_position', array(
        'default'			=>  'Bottom', 
        'sanitize_callback'	=> 'electo_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electo_store_post_pagination_position', array(
        'section' => 'electo_store_post_settings',
        'type' => 'select',
        'label' => __( 'Post Pagination Position', 'electo-store' ),
        'choices'		=> array(
            'Top'  => __( 'Top', 'electo-store' ),
            'Bottom' => __( 'Bottom', 'electo-store' ),
            'Both Top & Bottom' => __( 'Both Top & Bottom', 'electo-store' ),
    )));

	$wp_customize->add_setting( 'electo_store_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'electo_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electo_store_pagination_settings', array(
        'section' => 'electo_store_post_settings',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'electo-store' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'electo-store' ),
            'next-prev' => __( 'Next / Previous', 'electo-store' ),
    )));

    $wp_customize->add_setting('electo_store_post_block_option',array(
        'default' => 'By Block',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_post_block_option',array(
        'type' => 'select',
        'label' => __('Blog Post Shown','electo-store'),
        'section' => 'electo_store_post_settings',
        'choices' => array(
            'By Block' => __('By Block','electo-store'),
            'By Without Block' => __('By Without Block','electo-store'),
        ),
	) );

    //Single Post Settings
	$wp_customize->add_section('electo_store_single_post_settings', array(
		'title'    => __('Single Post Settings', 'electo-store'),
		'panel'    => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Date ','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

    $wp_customize->add_setting('electo_store_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

   $wp_customize->add_setting('electo_store_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
      $wp_customize,'electo_store_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','electo-store'),
		'section' => 'electo_store_single_post_settings'
	));

 	$wp_customize->add_setting('electo_store_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback' => 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer( $wp_customize, 'electo_store_single_post_comment_icon', array(
		'label'	=> __('Single Post Comment Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_single_post_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_single_post_tags',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Tags','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

    $wp_customize->add_setting('electo_store_single_post_time',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','electo-store'),
       'section' => 'electo_store_single_post_settings',
    ));

    $wp_customize->add_setting('electo_store_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_post_comment_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_post_comment_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post comment','electo-store'),
       'section' => 'electo_store_single_post_settings',
    ));

	$wp_customize->add_setting('electo_store_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured image','electo-store'),
       'section' => 'electo_store_single_post_settings',
    ));

	$wp_customize->add_setting('electo_store_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	) );
	$wp_customize->add_control('electo_store_single_post_layout', array(
        'type' => 'select',
        'label' => __('Select different Single post sidebar layout','electo-store'),
        'section' => 'electo_store_single_post_settings',
        'choices' => array(
            'One Column' => __('One Column','electo-store'),
            'Left Sidebar' => __('Left Sidebar','electo-store'),
            'Right Sidebar' => __('Right Sidebar','electo-store')
        ),
	)   );

	$wp_customize->add_setting( 'electo_store_single_post_meta_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electo_store_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','electo-store' ),
		'section'     => 'electo_store_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','electo-store'),
		'type'        => 'text',
		'settings'    => 'electo_store_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'electo_store_comment_form_width',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','electo-store' ),
		'section' => 'electo_store_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('electo_store_title_comment_form',array(
       'default' => __('Leave a Reply','electo-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electo_store_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

    $wp_customize->add_setting('electo_store_comment_form_button_content',array(
       'default' => __('Post Comment','electo-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electo_store_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

	$wp_customize->add_setting('electo_store_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Single Post Pagination','electo-store'),
       'section' => 'electo_store_single_post_settings'
    ));

	//Related Post Settings
	$wp_customize->add_section('electo_store_related_settings', array(
		'title'    => __('Related Post Settings', 'electo-store'),
		'panel'    => 'electo_store_panel_id',
	));

	$wp_customize->add_setting( 'electo_store_related_enable_disable',array(
		'default' => true,
      	'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electo_store_related_enable_disable',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Related Post','electo-store' ),
        'section' => 'electo_store_related_settings'
    ));

    $wp_customize->add_setting('electo_store_related_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_related_title',array(
		'label'	=> __('Add Section Title','electo-store'),
		'section'	=> 'electo_store_related_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'electo_store_related_posts_count_number', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electo_store_related_posts_count_number', array(
		'label'       => esc_html__( 'Related Post Count','electo-store' ),
		'section'     => 'electo_store_related_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 10,
		),
	) );

	$wp_customize->add_setting('electo_store_related_posts_taxanomies',array(
        'default' => 'categories',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_related_posts_taxanomies',array(
        'type' => 'radio',
        'label' => __('Post Taxonomies','electo-store'),
        'section' => 'electo_store_related_settings',
        'choices' => array(
            'categories' => __('Categories','electo-store'),
            'tags' => __('Tags','electo-store'),
        ),
	) );

	$wp_customize->add_setting( 'electo_store_related_post_excerpt_number',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','electo-store' ),
		'section' => 'electo_store_related_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	//Top Bar Section
	$wp_customize->add_section('electo_store_topbar',array(
		'title'	=> __('Topbar','electo-store'),
		'description'	=> __('Add contact us here','electo-store'),
		'priority'	=> null,
		'panel' => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_menu_font_size_option',array(
		'default'=> 12,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,'electo_store_menu_font_size_option',array(
		'label'	=> __('Menu Font Size ','electo-store'),
		'section'=> 'electo_store_topbar',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('electo_store_menu_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,'electo_store_menu_padding',array(
		'label'	=> __('Main Menu Padding','electo-store'),
		'section'=> 'electo_store_topbar',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	$wp_customize->add_setting('electo_store_text_tranform_menu',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'electo_store_sanitize_choices'
 	));
 	$wp_customize->add_control('electo_store_text_tranform_menu',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','electo-store'),
		'section' => 'electo_store_topbar',
		'choices' => array(
		   'Uppercase' => __('Uppercase','electo-store'),
		   'Lowercase' => __('Lowercase','electo-store'),
		   'Capitalize' => __('Capitalize','electo-store'),
		),
	) );

	$wp_customize->add_setting('electo_store_font_weight_option_menu',array(
		'default' => '',
		'sanitize_callback' => 'electo_store_sanitize_choices'
 	));
 	$wp_customize->add_control('electo_store_font_weight_option_menu',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','electo-store'),
		'section' => 'electo_store_topbar',
		'choices' => array(
		   'Bold' => __('Bold','electo-store'),
		   'Normal' => __('Normal','electo-store'),
		),
	) );

	$wp_customize->add_setting('electo_store_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_topbar',
		'type'		=> 'icon'
	)));

	//Social Media Section
	$wp_customize->add_section( 'electo_store_social_section' , array(
    	'title'      => __( 'Social Media Section', 'electo-store' ),
		'priority'   => null,
		'panel' => 'electo_store_panel_id'
	) );

   $wp_customize->add_setting('electo_store_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_facebook_icon',array(
		'label'	=> __('Facebook Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_social_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_facebook_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('electo_store_facebook_link',array(
		'label'	=> __('Add Facebook Link','electo-store'),
		'section'	=> 'electo_store_social_section',
		'type'		=> 'url'
	));

   $wp_customize->add_setting('electo_store_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_twitter_icon',array(
		'label'	=> __('Twitter Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_social_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_twitter_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('electo_store_twitter_link',array(
		'label'	=> __('Add Twitter Link','electo-store'),
		'section'	=> 'electo_store_social_section',
		'type'		=> 'url'
	));

   $wp_customize->add_setting('electo_store_linkdin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_linkdin_icon',array(
		'label'	=> __('Linkdin Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_social_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_linkdin_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('electo_store_linkdin_link',array(
		'label'	=> __('Add Linkdin Link','electo-store'),
		'section'	=> 'electo_store_social_section',
		'type'		=> 'url'
	));

   $wp_customize->add_setting('electo_store_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_instagram_icon',array(
		'label'	=> __('Instagram Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_social_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_instagram_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('electo_store_instagram_link',array(
		'label'	=> __('Add Instagram Link','electo-store'),
		'section'	=> 'electo_store_social_section',
		'type'		=> 'url'
	));

   $wp_customize->add_setting('electo_store_pintrest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_pintrest_icon',array(
		'label'	=> __('Pintrest Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_social_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_pintrest_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('electo_store_pintrest_link',array(
		'label'	=> __('Add Pintrest Link','electo-store'),
		'section'	=> 'electo_store_social_section',
		'type'		=> 'url'
	));

	//Slider Section
	$wp_customize->add_section( 'electo_store_slider_section' , array(
    	'title'      => __( 'Slider Section', 'electo-store' ),
		'priority'   => null,
		'panel' => 'electo_store_panel_id'
	) );

	$wp_customize->add_setting('electo_store_slider_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_slider_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable slider','electo-store'),
		'section' => 'electo_store_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'electo_store_slider_setting' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'electo_store_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'electo_store_slider_setting' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'electo-store' ),
			'description' => __('Slider image size (800 x 380)','electo-store'),
			'section'  => 'electo_store_slider_section',
			'allow_addition' => true,
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('electo_store_slider_heading',array(
		'default' => true,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_slider_heading',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Heading','electo-store'),
		'section' => 'electo_store_slider_section'
	));

	$wp_customize->add_setting('electo_store_slider_text',array(
		'default' => true,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_slider_text',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Text','electo-store'),
		'section' => 'electo_store_slider_section'
	));

	$wp_customize->add_setting('electo_store_enable_slider_overlay',array(
		'default' => true,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_enable_slider_overlay',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Image Overlay','electo-store'),
		'section' => 'electo_store_slider_section'
	));

   $wp_customize->add_setting('electo_store_slider_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_slider_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'electo-store'),
		'section'  => 'electo_store_slider_section',
		'settings' => 'electo_store_slider_overlay_color',
	)));

	//Opacity
	$wp_customize->add_setting('electo_store_slider_opacity',array(
		'default'           => 0.7,
		'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control( 'electo_store_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','electo-store' ),
		'section'     => 'electo_store_slider_section',
		'type'        => 'select',
		'settings'    => 'electo_store_slider_opacity',
		'choices' => array(
			'0' =>  esc_attr('0','electo-store'),
			'0.1' =>  esc_attr('0.1','electo-store'),
			'0.2' =>  esc_attr('0.2','electo-store'),
			'0.3' =>  esc_attr('0.3','electo-store'),
			'0.4' =>  esc_attr('0.4','electo-store'),
			'0.5' =>  esc_attr('0.5','electo-store'),
			'0.6' =>  esc_attr('0.6','electo-store'),
			'0.7' =>  esc_attr('0.7','electo-store'),
			'0.8' =>  esc_attr('0.8','electo-store'),
			'0.9' =>  esc_attr('0.9','electo-store')
		),
	));

	//content layout
    $wp_customize->add_setting('electo_store_slider_content_layout',array(
    	'default' => 'Left',
		'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_slider_content_layout',array(
		'type' => 'radio',
		'label' => __('Slider Content Layout','electo-store'),
		'section' => 'electo_store_slider_section',
		'choices' => array(
		   'Center' => __('Center','electo-store'),
		   'Left' => __('Left','electo-store'),
		   'Right' => __('Right','electo-store'),
		),
	) );

	$wp_customize->add_setting('electo_store_option_slider_height',array(
		'default'=> '380',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_option_slider_height',array(
		'label'	=> __('Slider Height','electo-store'),
		'section'=> 'electo_store_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_slider_content_top_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,  'electo_store_slider_content_top_padding',array(
		'label' => __('Top Bottom Slider Content Spacing','electo-store'),
		'section'=> 'electo_store_slider_section',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
	)));

	$wp_customize->add_setting('electo_store_slider_content_left_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize,  'electo_store_slider_content_left_padding',array(
		'label' => __('Left Right Slider Content Spacing','electo-store'),
		'section'=> 'electo_store_slider_section',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
  		),
	)));

	//Slider excerpt
	$wp_customize->add_setting( 'electo_store_slider_excerpt_number', array(
		'default'            => 15,
		'type'               => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electo_store_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','electo-store' ),
		'section'     => 'electo_store_slider_section',
		'type'        => 'number',
		'settings'    => 'electo_store_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'electo_store_slider_speed',array(
		'default' => 3000,
		'transport' => 'refresh',
		'type' => 'theme_mod',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_slider_speed',array(
		'label' => esc_html__( 'Slider Slide Speed','electo-store' ),
		'section' => 'electo_store_slider_section',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	)));

	//Our Services
  	$wp_customize->add_section('electo_store_coupon_section',array(
		'title' => __('Coupon Section','electo-store'),
		'description' => '',
		'priority'  => null,
		'panel' => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_coupon_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_coupon_text',array(
		'type' => 'text',
		'label' => __('Coupon Text','electo-store'),
		'section' => 'electo_store_coupon_section'
	));

	$wp_customize->add_setting('electo_store_coupon_button_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_coupon_button_text',array(
		'type' => 'text',
		'label' => __('Coupon Button Text','electo-store'),
		'section' => 'electo_store_coupon_section'
	));

	$wp_customize->add_setting('electo_store_coupon_button_url',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_coupon_button_url',array(
		'type' => 'text',
		'label' => __('Coupon Button URL','electo-store'),
		'section' => 'electo_store_coupon_section'
	));

	$wp_customize->add_setting('electo_store_coupon_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electo_store_coupon_image',array(
		'label' => __('Coupon Image','electo-store'),
		'section' => 'electo_store_coupon_section'
	)));

	//Our Services
  	$wp_customize->add_section('electo_store_category_section',array(
		'title' => __('Featured Coupon','electo-store'),
		'description' => '',
		'priority'  => null,
		'panel' => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_featured_enable',array(
		'default' => false,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_featured_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Featured Coupon','electo-store'),
		'section' => 'electo_store_category_section'
	));

	$wp_customize->add_setting('electo_store_featured_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_featured_section_title',array(
		'type' => 'text',
		'label' => __('Section Title','electo-store'),
		'section' => 'electo_store_category_section'
	));

	$wp_customize->add_setting('electo_store_featured_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_featured_text',array(
		'type' => 'text',
		'label' => __('Add Section Text','electo-store'),
		'section' => 'electo_store_category_section'
	));

	// category 
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

   $wp_customize->add_setting('electo_store_featured_coupons',array(
		'default' => 'select',
		'sanitize_callback' => 'electo_store_sanitize_choices',
  	));
  	$wp_customize->add_control('electo_store_featured_coupons',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Events','electo-store'),
		'section' => 'electo_store_category_section',
	));

	//footer text
	$wp_customize->add_section('electo_store_footer_section',array(
		'title'	=> __('Footer Text','electo-store'),
		'panel' => 'electo_store_panel_id'
	));

	$wp_customize->add_setting('electo_store_footer_bg_color', array(
		'default'           => '#0d0d0f',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electo_store_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'electo-store'),
		'section'  => 'electo_store_footer_section',
	)));

	$wp_customize->add_setting('electo_store_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electo_store_footer_bg_image',array(
		'label' => __('Footer Background Image','electo-store'),
		'section' => 'electo_store_footer_section'
	)));

	$wp_customize->add_setting('footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'electo_store_sanitize_choices',
	));
	$wp_customize->add_control('footer_widget_areas',array(
		'type'        => 'radio',
		'label'       => __('Footer widget area', 'electo-store'),
		'section'     => 'electo_store_footer_section',
		'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'electo-store'),
		'choices' => array(
		   '1'     => __('One', 'electo-store'),
		   '2'     => __('Two', 'electo-store'),
		   '3'     => __('Three', 'electo-store'),
		   '4'     => __('Four', 'electo-store')
		),
	));

	$wp_customize->add_setting('electo_store_hide_show_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electo_store_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','electo-store'),
      	'section' => 'electo_store_footer_section',
	));

	$wp_customize->add_setting('electo_store_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electo_Store_Icon_Changer(
        $wp_customize,'electo_store_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','electo-store'),
		'transport' => 'refresh',
		'section'	=> 'electo_store_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electo_store_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','electo-store'),
		'section'=> 'electo_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('electo_store_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top Alignment','electo-store'),
        'section' => 'electo_store_footer_section',
        'choices' => array(
            'Left align' => __('Left Align','electo-store'),
            'Right align' => __('Right Align','electo-store'),
            'Center align' => __('Center Align','electo-store'),
        ),
	) );

	$wp_customize->add_setting( 'electo_store_top_bottom_scroll_padding',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','electo-store' ),
		'section' => 'electo_store_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','electo-store' ),
		'section' => 'electo_store_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_back_to_top_border_radius',array(
		'default' => 50,
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','electo-store' ),
		'section' => 'electo_store_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));
	
	$wp_customize->add_setting('electo_store_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electo_store_footer_copy',array(
		'label'	=> __('Copyright Text','electo-store'),
		'section'	=> 'electo_store_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','electo-store'),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('electo_store_footer_text_align',array(
        'default' => 'center',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_footer_text_align',array(
        'type' => 'radio',
        'label' => __('Copyright Text Alignment ','electo-store'),
        'section' => 'electo_store_footer_section',
        'choices' => array(
            'left' => __('Left Align','electo-store'),
            'right' => __('Right Align','electo-store'),
            'center' => __('Center Align','electo-store'),
        ),
	) );

	$wp_customize->add_setting('electo_store_copyright_text_font_size',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_copyright_text_font_size',array(
		'label' => esc_html__( 'Copyright Font Size (px)','electo-store' ),
		'section'=> 'electo_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting( 'electo_store_footer_text_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_footer_text_padding',	array(
		'label' => esc_html__( 'Copyright Text Padding (px)','electo-store' ),
		'section' => 'electo_store_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	//Responsive Media Settings
	$wp_customize->add_section('electo_store_responsive_media',array(
		'title'	=> __('Responsive Media','electo-store'),
		'panel' => 'electo_store_panel_id',
	));

	$wp_customize->add_setting('electo_store_display_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_post_date',array(
       'type' => 'checkbox',
       'label' => __('Display Post Date','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    $wp_customize->add_setting('electo_store_display_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_post_author',array(
       'type' => 'checkbox',
       'label' => __('Display Post Author','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    $wp_customize->add_setting('electo_store_display_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Display Post Comment','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    $wp_customize->add_setting('electo_store_display_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_slider',array(
       'type' => 'checkbox',
       'label' => __('Display Slider','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

	$wp_customize->add_setting('electo_store_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    $wp_customize->add_setting('electo_store_display_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Display Scroll To Top','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    $wp_customize->add_setting('electo_store_display_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','electo-store'),
       'section' => 'electo_store_responsive_media'
    ));

    //404 Page Setting
	$wp_customize->add_section('electo_store_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','electo-store'),
		'panel' => 'electo_store_panel_id',
	));	

	$wp_customize->add_setting('electo_store_page_not_found_heading',array(
		'default'=> __('404 Not Found','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_page_not_found_heading',array(
		'label'	=> __('404 Heading','electo-store'),
		'section'=> 'electo_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_page_not_found_text',array(
		'label'	=> __('404 Content','electo-store'),
		'section'=> 'electo_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_page_not_found_button',array(
		'default'=>  __('Back to Home Page','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_page_not_found_button',array(
		'label'	=> __('404 Button','electo-store'),
		'section'=> 'electo_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_no_search_result_heading',array(
		'default'=> __('Nothing Found','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','electo-store'),
		'description'=>__('The search page heading display when no results are found.','electo-store'),
		'section'=> 'electo_store_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electo_store_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','electo-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electo_store_no_search_result_text',array(
		'label'	=> __('No Search Results Text','electo-store'),
		'description'=>__('The search page text display when no results are found.','electo-store'),
		'section'=> 'electo_store_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'electo_store_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'electo-store' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','electo-store'),
		'priority'   => null,
		'panel' => 'electo_store_panel_id'
	) );

	/**
	 * Product Columns
	 */
	$wp_customize->add_setting( 'electo_store_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'electo_store_per_columns', array(
		'label'    => __( 'Product per columns', 'electo-store' ),
		'section'  => 'electo_store_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('electo_store_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electo_store_product_per_page',array(
		'label'	=> __('Product per page','electo-store'),
		'section'	=> 'electo_store_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('electo_store_shop_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','electo-store'),
       'section' => 'electo_store_woocommerce_section',
    ));

    $wp_customize->add_setting('electo_store_product_page_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_product_page_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product page sidebar','electo-store'),
       'section' => 'electo_store_woocommerce_section',
    ));

    $wp_customize->add_setting('electo_store_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','electo-store'),
       'section' => 'electo_store_woocommerce_section',
    ));

    $wp_customize->add_setting( 'electo_store_woo_product_sale_border_radius',array(
		'default' => 50,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','electo-store'),
        'section'  => 'electo_store_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('electo_store_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','electo-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'electo_store_woocommerce_section',
	)));

    $wp_customize->add_setting('electo_store_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','electo-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'electo_store_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('electo_store_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','electo-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'electo_store_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('electo_store_woo_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'electo_store_sanitize_choices'
	));
	$wp_customize->add_control('electo_store_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','electo-store'),
        'section' => 'electo_store_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','electo-store'),
            'Left' => __('Left','electo-store'),
        ),
	));

	$wp_customize->add_setting( 'electo_store_woocommerce_button_padding_top',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_woocommerce_button_border_radius',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

    $wp_customize->add_setting('electo_store_woocommerce_product_border_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'electo_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electo_store_woocommerce_product_border_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','electo-store'),
       'section' => 'electo_store_woocommerce_section',
    ));

	$wp_customize->add_setting( 'electo_store_woocommerce_product_padding_top',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_woocommerce_product_padding_right',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_woocommerce_product_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'electo_store_woocommerce_product_box_shadow',array(
		'default' => 5,
		'transport' => 'refresh',
		'sanitize_callback' => 'electo_store_sanitize_integer'
	));
	$wp_customize->add_control( new Electo_Store_Custom_Control( $wp_customize, 'electo_store_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','electo-store' ),
		'section' => 'electo_store_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('electo_store_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'electo_store_sanitize_choices'
    ));
    $wp_customize->add_control('electo_store_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','electo-store'),
       'choices' => array(
            'Yes' => __('Yes','electo-store'),
            'No' => __('No','electo-store'),
        ),
       'section' => 'electo_store_woocommerce_section',
    ));
	
}
add_action( 'customize_register', 'electo_store_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Electo_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Electo_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Electo_Store_Customize_Section_Pro(
				$manager,
				'electo_store_example_1',
				array(
					'title'   =>  esc_html__( 'Electo Store Pro', 'electo-store' ),
					'pro_text' => esc_html__( 'Go Pro', 'electo-store' ),
					'pro_url'  => esc_url( 'https://netnus.com/product/electo-shop-pro-wordpress-theme/' ),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'electo-store-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'electo-store-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}

	//Footer widget areas
	function electo_store_sanitize_choices( $input ) {
	    $valid = array(
	        '1'     => __('One', 'electo-store'),
	        '2'     => __('Two', 'electo-store'),
	        '3'     => __('Three', 'electo-store'),
	        '4'     => __('Four', 'electo-store')
	    );
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
}

// Doing this customizer thang!
Electo_Store_Customize::get_instance();
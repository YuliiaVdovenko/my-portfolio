<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );


if ( ! function_exists( 'customize_contact_register' ) ) {
	function customize_contact_register($wp_customize)
	{
		$wp_customize -> add_section(
			'contact_text_section', array(
			'title' => __('Contact information'),
			'description' => __('Contact information')
		));

		
		$wp_customize -> add_setting('section-name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'section-name', array(
				'type'=>'text',
				'label' => __('Section name'),
				'section' => 'contact_text_section',
				'settings' => 'section-name',
			)));

		$wp_customize -> add_setting('form-name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'form-name', array(
				'type'=>'text',
				'label' => __('Form name'),
				'section' => 'contact_text_section',
				'settings' => 'form-name',
			)));



		$wp_customize -> add_setting('git', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'git', array(
				'type'=>'text',
				'label' => __('Git repository link'),
				'section' => 'contact_text_section',
				'settings' => 'git',
			)));

		$wp_customize -> add_setting('phone_number', array(
			'default' => '+38 '
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'phone_number', array(
				'type'=>'text',
				'label' => __('Custom phone number'),
				'description' => __("This is a phone number"),
				'section' => 'contact_text_section',
				'settings' => 'phone_number',
			)));

		$wp_customize -> add_setting('phone_number2', array(
			'default' => '+38 '
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'phone_number2', array(
				'type'=>'text',
				'label' => __('Custom phone number'),
				'description' => __("This is the second custom's phone number"),
				'section' => 'contact_text_section',
				'settings' => 'phone_number2',
			)));

		$wp_customize -> add_setting('email_address', array(
		'default' => 'example@gmail.com'
	));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'email_address', array(
				'type'=>'text',
				'label' => __('Email address'),
				'section' => 'contact_text_section',
				'settings' => 'email_address',
			)));

		$wp_customize -> add_setting('fb-link', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fb-link', array(
				'type'=>'text',
				'label' => __('Facebook link'),
				'section' => 'contact_text_section',
				'settings' => 'fb-link',
			)));

		$wp_customize -> add_setting('insta-link', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'insta-link', array(
				'type'=>'text',
				'label' => __('Linkedin link'),
				'section' => 'contact_text_section',
				'settings' => 'insta-link',
			)));

		$wp_customize -> add_setting('user_name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'user_name', array(
				'type'=>'text',
				'label' => __('User name for Skype'),
				'section' => 'contact_text_section',
				'settings' => 'user_name',
			)));

		$wp_customize->add_setting('back-footer-image');
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'back-footer-image',
				array(
					'label' => 'Background image',
					'section' => 'contact_text_section',
					'settings' => 'back-footer-image'
				)
			));
		$wp_customize->add_setting('my-photo');
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my-photo',
				array(
					'label' => 'Author Photo',
					'section' => 'contact_text_section',
					'settings' => 'my-photo'
				)
			));

			$wp_customize -> add_setting('copyright-text', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'copyright-text', array(
				'type'=>'text',
				'label' => __('Copyright Text'),
				'section' => 'contact_text_section',
				'settings' => 'copyright-text',
			)));
	}
}
add_action('customize_register', 'customize_contact_register');

if ( ! function_exists( 'customize_contact_header_register' ) ) {
	function customize_contact_header_register($wp_customize)
	{
		$wp_customize->add_section(
			'contact_header_section', array(
			'title' => __('Header'),
			'description' => __('Contact information')
		));

		$wp_customize -> add_setting('name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'name', array(
				'type'=>'text',
				'label' => __('Name'),
				'section' => 'contact_header_section',
				'settings' => 'name',
			)));

		$wp_customize -> add_setting('position', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'position', array(
				'type'=>'text',
				'label' => __('Position'),
				'section' => 'contact_header_section',
				'settings' => 'position',
			)));


		$wp_customize->add_setting('menu-link-name', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu-link-name', array(
				'type' => 'text',
				'label' => __('Menu link name'),
				'section' => 'contact_header_section',
				'settings' => 'menu-link-name',
			)));

		$wp_customize->add_setting('menu-link-name2', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu-link-name2', array(
				'type' => 'text',
				'label' => __('Menu link name'),
				'section' => 'contact_header_section',
				'settings' => 'menu-link-name2',
			)));

		$wp_customize->add_setting('menu-link-name-3', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu-link-name-3', array(
				'type' => 'text',
				'label' => __('Menu link name'),
				'section' => 'contact_header_section',
				'settings' => 'menu-link-name-3',
			)));

		$wp_customize->add_setting('back-image');
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'back-image',
				array(
					'label' => 'Background image',
					'section' => 'contact_header_section',
					'settings' => 'back-image'
				)
			));
	}
}
	add_action('customize_register', 'customize_contact_header_register');

	if ( ! function_exists( 'customize_error_register' ) ) {
	function customize_error_register($wp_customize)
	{
		$wp_customize->add_section(
			'error_section', array(
			'title' => __('Error Page'),
		));

		$wp_customize -> add_setting('page_name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_name', array(
				'type'=>'text',
				'label' => __('Page Name'),
				'section' => 'error_section',
				'settings' => 'page_name',
			)));

		$wp_customize -> add_setting('text-error', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'text-error', array(
				'type'=>'text',
				'label' => __('Error Text'),
				'section' => 'error_section',
				'settings' => 'text-error',
			)));


		$wp_customize->add_setting('error-link-name', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'error-link-name', array(
				'type' => 'text',
				'label' => __('Error link name'),
				'section' => 'error_section',
				'settings' => 'error-link-name',
			)));
	}
}
	add_action('customize_register', 'customize_error_register');
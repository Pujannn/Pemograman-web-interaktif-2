<?php
/**
 * Customizer section options.
 *
 * @package irvine-news
 *
 */

function irvine_news_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
	// Footer copyright
		
		$wp_customize->add_setting( 'newsexo_footer_copright_text',
		array(
			'sanitize_callback' =>  'irvine_news_sanitize_text',
			'default' => __('Copyright &copy; 2024 | Powered by <a href="//wordpress.org/">WordPress</a>', 'irvine-news'),
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'newsexo_footer_copright_text',
		array(
			'label'   => esc_html__( 'Copyright Text', 'irvine-news' ),
			'section' => 'newsexo_footer_copyright',
			'priority'        => 10,
			'type' => 'textarea',
		));
}
add_action( 'customize_register', 'irvine_news_customizer_theme_settings' );

function irvine_news_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}
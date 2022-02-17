<?php
/**
 * The template for displaying search forms in Electo Store
 * @package Electo Store
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Zoeken naar:', 'label', 'electo-store' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('electo_store_search_placeholder', __('Zoeken', 'electo-store')) ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Zoeken', 'submit button','electo-store' ); ?>">
</form>
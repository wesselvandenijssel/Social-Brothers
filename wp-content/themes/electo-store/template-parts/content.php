<?php
/**
 * The template part for displaying content
 * @package Electo Store
 * @subpackage electo_store
 * @since 1.0
 */
?>

<?php $electo_store_theme_lay = get_theme_mod( 'electo_store_post_layouts','Layout 1');
if($electo_store_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($electo_store_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($electo_store_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}
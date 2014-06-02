<?php


/**************************************/
/**************************************/
/************ THEME SETTINGS **********/


// additional image sizes if needed
// add_image_size( 'slider', 950, 350, 1 );


//custom image size im tinymce nutzen (nur wenn neue image sizes hinzugekommen sind)
/*function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'fullsize' => __('Volle Breite'),
    ) );
}
add_filter( 'image_size_names_choose', 'my_custom_sizes' ); */


// standard [...] abschluss des excerpts anpassen
/* function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more'); */


//set width of content
function set_content_width(){
	return 'small-12 medium-12 large-12';
}
add_filter('general_post_content_width','set_content_width'); 		//post width
add_filter('general_page_content_width','set_content_width'); 		//page width
add_filter('general_category_content_width','set_content_width');	//category listing width


//include default style.css -> muss drinbleiben!!!
function include_default_css(){
	
	wp_register_style('style',get_stylesheet_directory_uri().'/style.css');
	wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','include_default_css',10);


// sample markup bereinigen (aus dem parent theme)
/*function cleanup_sample_markup(){
	
	$descprio = has_action('foundationPress_layout_start', 'foundationPress_top_header');
	remove_action('foundationPress_layout_start','foundationPress_top_header',$descprio);
	
	$naviprio = has_action('foundationPress_layout_start', 'foundationPress_top_navigation');
	remove_action('foundationPress_layout_start','foundationPress_top_navigation',$naviprio);
	
	$topbarprio = has_action('foundationPress_layout_start', 'foundationPress_topbar');
	remove_action('foundationPress_layout_start','foundationPress_topbar',$topbarprio);
	
	$iphoneicons = has_action('wp_head','foundationPress_iPhone_icons');
	remove_action('wp_head','foundationPress_iPhone_icons',$iphoneicons);
}
add_action('init','cleanup_sample_markup'); */


// hole eigenes favicon rein
function pix_change_favicon(){ ?>
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
<?php }
add_action('wp_head','jci_favicon');


// eiegen custom.js datei reinholen (falls benötigt)
/*function include_custom(){
	
	wp_register_script('custom',get_stylesheet_directory_uri().'/js/custom.js');
	wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts','include_custom',100); */




/********** END THEME SETTINGS ********/
/**************************************/
/**************************************/
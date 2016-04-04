<?php
include_once(ABSPATH .'wp-content\themes\post-types.php');
function b2w_theme_styles(){

	wp_enqueue_style('bootstrap_css',get_template_directory_uri() . '/bootstrap3/css/bootstrap.min.css');
	wp_enqueue_style('ct_paper_css',get_template_directory_uri() . '/assets/css/ct-paper.css');
	wp_enqueue_style('ct_paper_css',get_template_directory_uri() . '/assets/css/ct-paper.css');
	wp_enqueue_style('demo_css',get_template_directory_uri() . '/assets/css/demo.css');
	wp_enqueue_style('style_css',get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','b2w_theme_styles');


function b2w_theme_js(){

	// wp_enqueue_script('jquery_ui_js',get_template_directory_uri() . '/assets/js/jquery-ui-1.10.4.custom.min.js',array('jquery'),'',true);
	wp_enqueue_script('bootstrap_js',get_template_directory_uri() . '/bootstrap3/js/bootstrap.min.js',array('jquery'),'',true);

	wp_enqueue_script('bootstrap-select_js',get_template_directory_uri() . '/assets/js/bootstrap-select.js',array('jquery'),'',true);
	wp_enqueue_script('bootstrap-datepicker_js',get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js',array('jquery'),'',true);

	wp_enqueue_script('ct-paper_js',get_template_directory_uri() . '/assets/js/ct-paper.js',array('jquery'),'',true);
	wp_enqueue_script('ct_paper_checkbox_js',get_template_directory_uri() . '/assets/js/ct-paper-checkbox.js',array('jquery'),'',true);
	wp_enqueue_script('ct-paper-radio_js',get_template_directory_uri() . '/assets/js/ct-paper-radio.js',array('jquery'),'',true);
	
	wp_enqueue_script('jquery-easing_js',get_template_directory_uri() . '/assets/js/jquery-easing.js',array('jquery'),'',true);
	wp_enqueue_script('cacti_js',get_template_directory_uri() . '/assets/js/cacti.js',array('jquery'),'',true);

}

add_action('wp_enqueue_scripts','b2w_theme_js');
?>

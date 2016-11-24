<?php
/**
 * Plugin Name:     Simple Markdown Filter
 * Description:     Simple Markdown Filter For post_content
 * Author:          Toro_Unit
 * Author URI:      https://torouint.com
 * Text Domain:     simple-markdown-filter
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Simple_Markdown_Filter
 */


namespace Torounit\Simple_Markdown_Filter;

require 'vendor/autoload.php';


add_filter( 'the_content', function( $content ) {

	$Parsedown = new \Parsedown();
	return $Parsedown->text( $content );
}, 0 );




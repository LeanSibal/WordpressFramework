<?php
error_reporting( E_ALL);
/**
 * @package WordpressPlugin
 * @version 0.0
 */
/*
Plugin Name: Wordpress Plugin
Plugin URI: https://github.com/LeanSibal/WordpressFramework
Description: Wordpress abstraction framework Plugin for Web Developers
Author: Leandro Sibal
Version: 0.0
Author URI: https://github.com/LeanSibal
*/

define( 'WORDPRESS_FRAMEWORK_DIR', plugin_dir_path( __FILE__ ) );

require_once( WORDPRESS_FRAMEWORK_DIR . '/classes/class.wordpress.php' );
require_once( WORDPRESS_FRAMEWORK_DIR . '/classes/class.action.php' );


Wordpress::action('init', function(){
});


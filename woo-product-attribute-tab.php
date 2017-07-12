<?php
/* 
Plugin Name: Product Attribute Tab for WooCommerce
Plugin URI: http://wordpress.org/plugins/woo-product-attribute-tab
Description: Avoid redundant product descriptions and reuse attribute descriptions instead. Append them to your main description or show them in extra tabs.
Author: Michael Jarrett
Version: 1.1.0
Author URI: http://m.jarrett.ch
Text Domain: woo-product-attribute-tab
Domain Path: /languages
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/**
 * Exit if accessed directly.
 */
defined('ABSPATH') or die();

/**
 * Initialize the plugin.
 */
require_once('components/class.core.php');
MJJ\WooProductAttributeTab\Core::instance();

?>
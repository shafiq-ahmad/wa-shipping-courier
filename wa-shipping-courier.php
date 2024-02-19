<?php
/**
 * Plugin Name:       WA Shipping Courier
 * Plugin URI:        https://github.com/shafiq-ahmad/wa-shipping-courier
 * Description:       This WooCommerce plugin is designed for dashgocourier based in UAE.
 * Version:           1.0
 * Author:            Shafique Ahmad
 * Author URI:        http://webapplics.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://webapplics.com/updates/wa-shipping-courier
 * Text Domain:       wa-shipping-courier
 * Domain Path:       /languages
 */

//Direct access to this file is not permitted
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Do not access this file directly.' );
}

define ('WA_Shipping_Courier_Plugin_path', plugin_dir_path(__FILE__));
define ('WA_Shipping_courier_Plugin_base', plugin_basename( __FILE__ ));

require 'common.php';
if ( is_admin() ) {
	require 'wa-shipping-courier-admin.php';
}else{

	if ( ! class_exists( 'WA_Shipping_Courier_Plugin' ) ) {
		class WA_Shipping_Courier_Plugin {
			//use WAePubContent;
			public $api_url = 'https://dashgocourier.com/api/dashgoOrder.php';
			public function __construct() {
				//add_action( 'save_post', array($this, 'wa_epub_save_book'),10, 3 );
			}
			
			public function wa_epub_save_book($post_id, $post, $update ) {
				if ( 'post' !== $post->post_type ) {
					return;
				}
				
			}
		}

		$wa_shipping_courier = new WA_Shipping_Courier_Plugin();

	}
}


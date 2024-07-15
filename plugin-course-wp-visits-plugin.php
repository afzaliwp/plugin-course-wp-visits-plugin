<?php
/**
 * Plugin Name:       AfzaliWP Visits Plugin
 * Description:       A plugin to count the visits on the website
 * Version:           0.0.1
 * Plugin URI:        https://afzaliwp.com/
 * Author:            Mohammad Afzali
 * Author URI:        https://afzaliwp.com/
 * Text Domain:       afzaliwp-visits
 * Domain Path:       /languages
 *
 */

define( 'AFZ_WP_VISITS_INC_DIR', __DIR__ . '/includes/' );
define( 'AFZ_WP_VISITS_TPL_DIR', __DIR__ . '/template/' );
define( 'AFZ_WP_VISITS_LANG_DIR', __DIR__ . '/languages/' );
define( 'AFZ_WP_VISITS_ASSETS_DIR', __DIR__ . '/assets/' );
define( 'AFZWP_VISITS_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/' );

load_plugin_textdomain( 'afzaliwp-visits', false, basename( dirname( __FILE__ ) ) . '/languages' );
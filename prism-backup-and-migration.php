<?php
/**
 * Plugin Name: Prism Backup and Migration
 * Plugin URI: 
 * Description: Backup and Migration plugin. 
 * Version: 0.1
 * Author: Chris Ant
 * Author URI: 
 * Text Domain: prism-backup-and-migration
 * License: GPL2
 * WC requires at least: 6.4.0
 * WC tested up to: 8.2
*/

define('PBM_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ )); 
define('PBM_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ));

if ( is_readable( PBM_PLUGIN_DIR_PATH . '/vendor/autoload.php' ) ) {
    require PBM_PLUGIN_DIR_PATH . '/vendor/autoload.php';
}


// in case external libraries beside composer autoload are needed checkout PHP Scoper
// https://yoast.com/developer-blog/safely-using-php-dependencies-in-the-wordpress-ecosystem/ 

/**
 * Some possible first steps. 
 * 1. Create menu page. 
 * 2. Create action and filters loader. We need this for hooking into WP.
 * 3. ...
 */

use PrismBackupAndMigration\Wrapper\AdminMenuPage;
$app_start_path = PBM_PLUGIN_DIR_PATH . '/src/App/start.php';
$pbm_main_menu_page = new AdminMenuPage($app_start_path, 'Prism Backup and Migration', 'Prism Backup', 'manage_options', 'pbm_admin', 'dashicons-database-view', 99999999999);

function dd($something){
    echo '<pre>';
    var_dump($something);
    echo '<pre>';
    die();
}
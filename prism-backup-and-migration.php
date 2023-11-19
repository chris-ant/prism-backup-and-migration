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

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
    require __DIR__ . '/vendor/autoload.php';
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
$pbm_main_menu_page = new AdminMenuPage('Prism Backup and Migration', 'Prism Backup', 'manage_options', 'pbm_admin', 'dashicons-database-view', 99999999999);


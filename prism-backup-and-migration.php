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

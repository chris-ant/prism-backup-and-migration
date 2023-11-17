<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc33df29c547c21cfc08f8a3e2d0fb57b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc33df29c547c21cfc08f8a3e2d0fb57b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc33df29c547c21cfc08f8a3e2d0fb57b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc33df29c547c21cfc08f8a3e2d0fb57b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

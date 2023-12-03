<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc33df29c547c21cfc08f8a3e2d0fb57b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrismBackupAndMigration\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrismBackupAndMigration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PrismBackupAndMigration\\App\\Controller' => __DIR__ . '/../..' . '/src/App/Controller.php',
        'PrismBackupAndMigration\\App\\Controllers\\ExportAdminController' => __DIR__ . '/../..' . '/src/App/Controllers/ExportAdminController.php',
        'PrismBackupAndMigration\\App\\Controllers\\ImportAdminController' => __DIR__ . '/../..' . '/src/App/Controllers/ImportAdminController.php',
        'PrismBackupAndMigration\\App\\Framework' => __DIR__ . '/../..' . '/src/App/Framework.php',
        'PrismBackupAndMigration\\App\\Models\\ExportAdmin' => __DIR__ . '/../..' . '/src/App/Models/ExportAdmin.php',
        'PrismBackupAndMigration\\App\\Router' => __DIR__ . '/../..' . '/src/App/Router.php',
        'PrismBackupAndMigration\\Wrapper\\AdminMenuPage' => __DIR__ . '/../..' . '/src/Wrapper/AdminMenuPage.php',
        'PrismBackupAndMigration\\Wrapper\\AdminOptions' => __DIR__ . '/../..' . '/src/Wrapper/AdminOptions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc33df29c547c21cfc08f8a3e2d0fb57b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc33df29c547c21cfc08f8a3e2d0fb57b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc33df29c547c21cfc08f8a3e2d0fb57b::$classMap;

        }, null, ClassLoader::class);
    }
}

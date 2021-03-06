<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1770c947fe2f75ae00a767d12c10feba
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1770c947fe2f75ae00a767d12c10feba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1770c947fe2f75ae00a767d12c10feba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1770c947fe2f75ae00a767d12c10feba::$classMap;

        }, null, ClassLoader::class);
    }
}

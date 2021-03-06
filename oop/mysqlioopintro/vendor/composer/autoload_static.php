<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit825d7c2860223d0e248f1c73ae5d7e0d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit825d7c2860223d0e248f1c73ae5d7e0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit825d7c2860223d0e248f1c73ae5d7e0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit825d7c2860223d0e248f1c73ae5d7e0d::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac667a98f7bcaa0a421517e9c0a0a363
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Muzan\\Whitelistmanager\\' => 23,
        ),
        'B' => 
        array (
            'Bcrypt\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Muzan\\Whitelistmanager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Bcrypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/polarising/bcrypt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac667a98f7bcaa0a421517e9c0a0a363::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac667a98f7bcaa0a421517e9c0a0a363::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac667a98f7bcaa0a421517e9c0a0a363::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9393ca8d9d9b0b5f219c52298aa062f0
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laptop\\Oop\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laptop\\Oop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9393ca8d9d9b0b5f219c52298aa062f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9393ca8d9d9b0b5f219c52298aa062f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9393ca8d9d9b0b5f219c52298aa062f0::$classMap;

        }, null, ClassLoader::class);
    }
}
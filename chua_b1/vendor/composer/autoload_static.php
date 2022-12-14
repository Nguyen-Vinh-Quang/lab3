<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16106f377b6b1b3cb49e55b5e48db7a8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16106f377b6b1b3cb49e55b5e48db7a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16106f377b6b1b3cb49e55b5e48db7a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16106f377b6b1b3cb49e55b5e48db7a8::$classMap;

        }, null, ClassLoader::class);
    }
}

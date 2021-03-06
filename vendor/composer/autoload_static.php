<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf110fe954a91a1e4a30065a0ece8309f
{
    public static $files = array (
        '9c08f79c2fd0c6683c2fd0dca1921010' => __DIR__ . '/../..' . '/Core/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kavenegar\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kavenegar\\' => 
        array (
            0 => __DIR__ . '/..' . '/kavenegar/php/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf110fe954a91a1e4a30065a0ece8309f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf110fe954a91a1e4a30065a0ece8309f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf110fe954a91a1e4a30065a0ece8309f::$classMap;

        }, null, ClassLoader::class);
    }
}

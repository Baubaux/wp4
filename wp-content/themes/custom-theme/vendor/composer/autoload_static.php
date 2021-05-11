<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit133d57ba361ae2a577a3970832ee1ded
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit133d57ba361ae2a577a3970832ee1ded::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit133d57ba361ae2a577a3970832ee1ded::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit133d57ba361ae2a577a3970832ee1ded::$classMap;

        }, null, ClassLoader::class);
    }
}

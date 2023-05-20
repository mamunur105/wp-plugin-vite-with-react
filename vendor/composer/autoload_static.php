<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c472128954328041481b71ddab22f5a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TinySolutions\\cptint\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TinySolutions\\cptint\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c472128954328041481b71ddab22f5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c472128954328041481b71ddab22f5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c472128954328041481b71ddab22f5a::$classMap;

        }, null, ClassLoader::class);
    }
}
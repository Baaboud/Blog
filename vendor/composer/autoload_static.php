<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34ea2990ce4dea7c9e6d04488e8793e0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pc\\Blog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pc\\Blog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit34ea2990ce4dea7c9e6d04488e8793e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34ea2990ce4dea7c9e6d04488e8793e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34ea2990ce4dea7c9e6d04488e8793e0::$classMap;

        }, null, ClassLoader::class);
    }
}

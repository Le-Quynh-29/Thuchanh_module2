<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18c8620d4514d0997b37bd37081566cd
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18c8620d4514d0997b37bd37081566cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18c8620d4514d0997b37bd37081566cd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0847d04aca1a2ca88fb5855340c73c1f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0847d04aca1a2ca88fb5855340c73c1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0847d04aca1a2ca88fb5855340c73c1f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
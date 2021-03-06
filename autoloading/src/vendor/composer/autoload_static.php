<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d5bdb5b517784314ec8ccb934d818f8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MunculGroup\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MunculGroup\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d5bdb5b517784314ec8ccb934d818f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d5bdb5b517784314ec8ccb934d818f8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

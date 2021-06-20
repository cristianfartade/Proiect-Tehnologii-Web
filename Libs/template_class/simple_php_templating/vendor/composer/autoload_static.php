<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2982e5b3c19fb420b85ea2deac8b7a28
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMicroTemplate\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMicroTemplate\\' => 
        array (
            0 => __DIR__ . '/..' . '/wol-soft/php-micro-template/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2982e5b3c19fb420b85ea2deac8b7a28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2982e5b3c19fb420b85ea2deac8b7a28::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

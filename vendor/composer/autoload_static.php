<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef3cf82ae96193ea4f7c21b97b0115c9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'Genome\\GenomeModule\\' => 20,
            'Genome\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Genome\\GenomeModule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Genome\\' => 
        array (
            0 => __DIR__ . '/..' . '/genome-eu/hpp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef3cf82ae96193ea4f7c21b97b0115c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef3cf82ae96193ea4f7c21b97b0115c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

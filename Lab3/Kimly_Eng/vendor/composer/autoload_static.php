<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3ed450b0ad892da3c72b77e4ab52105
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3ed450b0ad892da3c72b77e4ab52105::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3ed450b0ad892da3c72b77e4ab52105::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
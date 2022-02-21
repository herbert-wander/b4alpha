<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd61c84c968138f974acd235acf26fd5
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetzWeb\\Instagram\\' => 18,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetzWeb\\Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/cosenary/instagram/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd61c84c968138f974acd235acf26fd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd61c84c968138f974acd235acf26fd5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ea0d886318ff45740fecf0fecd16dd
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youshido\\GraphQL\\' => 17,
        ),
        'W' => 
        array (
            'WPGraphQL\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youshido\\GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/youshido/graphql/src',
        ),
        'WPGraphQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28ea0d886318ff45740fecf0fecd16dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28ea0d886318ff45740fecf0fecd16dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
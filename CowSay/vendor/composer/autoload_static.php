<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit342afa6d1a23f870a7ea2a6fda2d39db
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
        3 => 
        array (
            '33695\\CowSay\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
        '33695\\CowSay\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit342afa6d1a23f870a7ea2a6fda2d39db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit342afa6d1a23f870a7ea2a6fda2d39db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit342afa6d1a23f870a7ea2a6fda2d39db::$classMap;

        }, null, ClassLoader::class);
    }
}
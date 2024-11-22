<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09fd7096eadd3d7edda355beffdc1d22
{
    public static $files = array (
        '7ffd83cc67e9830c6aea13d64be25236' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09fd7096eadd3d7edda355beffdc1d22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09fd7096eadd3d7edda355beffdc1d22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09fd7096eadd3d7edda355beffdc1d22::$classMap;

        }, null, ClassLoader::class);
    }
}

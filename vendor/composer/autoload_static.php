<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1defb26603dffbdabddfedbe0fa7854
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Levelup\\Cms\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Levelup\\Cms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1defb26603dffbdabddfedbe0fa7854::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1defb26603dffbdabddfedbe0fa7854::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1defb26603dffbdabddfedbe0fa7854::$classMap;

        }, null, ClassLoader::class);
    }
}

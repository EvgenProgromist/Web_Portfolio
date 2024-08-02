<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2e41f618d980fe83811116ea6f22efa
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EvBiTek\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EvBiTek\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../EvBiTek/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2e41f618d980fe83811116ea6f22efa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2e41f618d980fe83811116ea6f22efa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2e41f618d980fe83811116ea6f22efa::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite2e41f618d980fe83811116ea6f22efa
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite2e41f618d980fe83811116ea6f22efa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite2e41f618d980fe83811116ea6f22efa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite2e41f618d980fe83811116ea6f22efa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

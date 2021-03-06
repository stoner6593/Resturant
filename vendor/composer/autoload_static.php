<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0eca0c10d81aef83163c64588d47353
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sunat\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sunat\\' => 
        array (
            0 => __DIR__ . '/..' . '/jossmp/sunatphp/src',
        ),
    );

    public static $classMap = array (
        'Sunat\\Sunat' => __DIR__ . '/..' . '/jossmp/sunatphp/src/sunat.php',
        'Sunat\\cURL' => __DIR__ . '/..' . '/jossmp/sunatphp/src/curl.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0eca0c10d81aef83163c64588d47353::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0eca0c10d81aef83163c64588d47353::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0eca0c10d81aef83163c64588d47353::$classMap;

        }, null, ClassLoader::class);
    }
}

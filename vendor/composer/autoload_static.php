<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b8f6d64989ec3841cf198fa5e267df6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matscode\\Paystack\\' => 18,
        ),
        7 => 
        array (
            '7470\\Paystack\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matscode\\Paystack\\' => 
        array (
            0 => __DIR__ . '/..' . '/matscode/paystack-php-sdk/src',
        ),
        '7470\\Paystack\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b8f6d64989ec3841cf198fa5e267df6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b8f6d64989ec3841cf198fa5e267df6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b8f6d64989ec3841cf198fa5e267df6::$classMap;

        }, null, ClassLoader::class);
    }
}

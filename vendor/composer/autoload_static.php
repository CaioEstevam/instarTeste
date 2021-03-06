<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d57591a0f6cd5c75c6e1005bf62d7ba
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d57591a0f6cd5c75c6e1005bf62d7ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d57591a0f6cd5c75c6e1005bf62d7ba::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8d57591a0f6cd5c75c6e1005bf62d7ba::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

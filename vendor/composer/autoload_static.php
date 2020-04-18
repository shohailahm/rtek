<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ff22cd6e7abcee14661a5e57b15e344
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ff22cd6e7abcee14661a5e57b15e344::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ff22cd6e7abcee14661a5e57b15e344::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

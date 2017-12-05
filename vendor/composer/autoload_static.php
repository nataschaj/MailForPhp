<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9dde1e46770a9e658c835ed10beda75
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9dde1e46770a9e658c835ed10beda75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9dde1e46770a9e658c835ed10beda75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66a0db5f5eec88d43b0ee1a150e01ecf
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit66a0db5f5eec88d43b0ee1a150e01ecf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66a0db5f5eec88d43b0ee1a150e01ecf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
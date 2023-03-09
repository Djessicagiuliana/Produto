<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfa12052cb801b7efd036f96169c7f8a
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfa12052cb801b7efd036f96169c7f8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfa12052cb801b7efd036f96169c7f8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbfa12052cb801b7efd036f96169c7f8a::$classMap;

        }, null, ClassLoader::class);
    }
}
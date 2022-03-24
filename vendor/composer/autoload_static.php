<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit880bfc4cfdc74250f460f1ff472da4be
{
    public static $files = array (
        'b55cad24f2458eda8d465b912b455ad4' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit880bfc4cfdc74250f460f1ff472da4be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit880bfc4cfdc74250f460f1ff472da4be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit880bfc4cfdc74250f460f1ff472da4be::$classMap;

        }, null, ClassLoader::class);
    }
}
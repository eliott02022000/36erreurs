<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc68fc6dce5f3e188c769dbe35bfdbb6b
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'ThirtySix' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'M' => 
        array (
            'Model' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'Controller' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc68fc6dce5f3e188c769dbe35bfdbb6b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

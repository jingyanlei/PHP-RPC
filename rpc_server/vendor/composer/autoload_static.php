<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c780a086581596cd660f6f05df6d98c
{
    public static $files = array (
        '7a3a3ddf55aa5bdbff2cc90a2e666654' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose.php',
    );

    public static $classMap = array (
        'FB' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
        'FirePHP' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php',
        'PHPRPC_Client' => __DIR__ . '/..' . '/codegun/phprpc/src/phprpc_client.php',
        'PHPRPC_Date' => __DIR__ . '/..' . '/codegun/phprpc/src/phprpc_date.php',
        'PHPRPC_Error' => __DIR__ . '/..' . '/codegun/phprpc/src/phprpc_client.php',
        'PHPRPC_Server' => __DIR__ . '/..' . '/codegun/phprpc/src/phprpc_server.php',
        '_PHPRPC_Client' => __DIR__ . '/..' . '/codegun/phprpc/src/phprpc_client.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7c780a086581596cd660f6f05df6d98c::$classMap;

        }, null, ClassLoader::class);
    }
}

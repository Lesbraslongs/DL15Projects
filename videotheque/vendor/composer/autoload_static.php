<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb9417b599f27937a29a7c6806e4a900
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '32dcc8afd4335739640db7d200c1971d' => __DIR__ . '/..' . '/symfony/polyfill-apcu/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
        '3fad0ebbff9928a94a9d8941fb314bd8' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Bundle\\SwiftmailerBundle\\' => 33,
            'Symfony\\Bundle\\MonologBundle\\' => 29,
            'Symfony\\Bundle\\AsseticBundle\\' => 29,
            'Sensio\\Bundle\\FrameworkExtraBundle\\' => 35,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Incenteev\\ParameterHandler\\' => 27,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
            'Doctrine\\Bundle\\FixturesBundle\\' => 31,
            'Doctrine\\Bundle\\DoctrineCacheBundle\\' => 36,
            'Doctrine\\Bundle\\DoctrineBundle\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Bundle\\SwiftmailerBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/swiftmailer-bundle',
        ),
        'Symfony\\Bundle\\MonologBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/monolog-bundle',
        ),
        'Symfony\\Bundle\\AsseticBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/assetic-bundle',
        ),
        'Sensio\\Bundle\\FrameworkExtraBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/sensio/framework-extra-bundle',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Incenteev\\ParameterHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/incenteev/composer-parameter-handler',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
        ),
        'Doctrine\\Bundle\\FixturesBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-fixtures-bundle',
        ),
        'Doctrine\\Bundle\\DoctrineCacheBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-cache-bundle',
        ),
        'Doctrine\\Bundle\\DoctrineBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-bundle',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Symfony\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/symfony/src',
            ),
            'Sensio\\Bundle\\GeneratorBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/generator-bundle',
            ),
            'Sensio\\Bundle\\DistributionBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/distribution-bundle',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\ORM\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/orm/lib',
            ),
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\DataFixtures' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/data-fixtures/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Collator.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/NumberFormatter.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'SqlFormatter' => __DIR__ . '/..' . '/jdorn/sql-formatter/lib/SqlFormatter.php',
        'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb9417b599f27937a29a7c6806e4a900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb9417b599f27937a29a7c6806e4a900::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb9417b599f27937a29a7c6806e4a900::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitfb9417b599f27937a29a7c6806e4a900::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitfb9417b599f27937a29a7c6806e4a900::$classMap;

        }, null, ClassLoader::class);
    }
}
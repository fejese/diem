<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                        => array(__DIR__.'/../vendor/symfony/src', __DIR__.'/../vendor/bundles'),
    'Sensio'                         => __DIR__.'/../vendor/bundles',
    'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/symfony/vendor/doctrine-data-fixtures/lib',
    'Doctrine\\Common'               => __DIR__.'/../vendor/symfony/vendor/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations'     => __DIR__.'/../vendor/symfony/vendor/doctrine-migrations/lib',
//    'Doctrine\\MongoDB'              => __DIR__.'/../vendor/symfony/vendor/doctrine-mongodb/lib',
//    'Doctrine\\ODM\\MongoDB'         => __DIR__.'/../vendor/symfony/vendor/doctrine-mongodb-odm/lib',
    'DoctrineExtensions\\NestedSet'  => __DIR__.'/../vendor/doctrine2-nestedset/lib',
    'Doctrine\\DBAL'                 => __DIR__.'/../vendor/symfony/vendor/doctrine-dbal/lib',
    'Doctrine'                       => __DIR__.'/../vendor/symfony/vendor/doctrine/lib',
    'Zend\\Log'                      => __DIR__.'/../vendor/symfony/vendor/zend-log',
    'Zend'                           => __DIR__.'/../vendor/symfony/vendor/zend/library',
    'Assetic'                        => __DIR__.'/../vendor/symfony/vendor/assetic/src',
    'FOS'                            => __DIR__.'/../vendor/bundles',
    'Knplabs'                        => __DIR__.'/../vendor/bundles',
    'Acme'                           => __DIR__.'/../src',
    'Diem'                           => __DIR__.'/../src',
));
$loader->registerPrefixes(array(
//    'Twig_Extensions_' => __DIR__.'/../vendor/symfony/vendor/twig-extensions/lib',
    'Twig_'            => __DIR__.'/../vendor/symfony/vendor/twig/lib',
    'Swift_'           => __DIR__.'/../vendor/symfony/vendor/swiftmailer/lib/classes',
));
$loader->register();

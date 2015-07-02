<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use YapepBase\Autoloader\AutoloaderRegistry;
use YapepBase\Autoloader\SimpleAutoloader;

require __DIR__ . '/vendor/autoload.php';

$autoloader = new SimpleAutoloader();

$autoloader->addClassPath(__DIR__ . '/class');

AutoloaderRegistry::getInstance()->addAutoloader($autoloader);

// The container should be accessible from the application, and not a global of course.
$container = new ContainerBuilder();

$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
$loader->load('di.yml');

if (defined('APP_DIR')) {
    $autoloader->addClassPath(APP_DIR . '/class');

    $loader = new YamlFileLoader($container, new FileLocator(APP_DIR . '/config'));
    $loader->load('di.yml');
}

$container->compile();

//file_put_contents(__DIR__ . '/compiled.php', (new PhpDumper($container))->dump());

unset($autoloader);

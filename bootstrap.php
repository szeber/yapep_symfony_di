<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use YapepBase\Bootstrap\BasicBootstrap;
use YapepBase\ErrorHandler\EchoErrorHandler;

require __DIR__ . '/vendor/autoload.php';

class Bootstrap extends BasicBootstrap
{

    protected function setupErrorHandling()
    {
        parent::setupErrorHandling();
        $this->diContainer->get('yapepBase.errorHandlerRegistry')->addErrorHandler(new EchoErrorHandler());
    }
}

(new BasicBootstrap('dev', __DIR__, __DIR__ . '/vendor'))->setApplicationDir(APP_DIR)->start();

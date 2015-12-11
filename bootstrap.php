<?php

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

(new BasicBootstrap(getenv('ENVIRONMENT') ?: 'dev', __DIR__, __DIR__ . '/vendor'))->setApplicationDir(APP_DIR)->start();

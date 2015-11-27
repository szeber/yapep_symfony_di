<?php
/**
 * Bootstrap of the application.
 */

use YapepBase\Application;
use YapepBase\Config;
use YapepBase\Debugger\ConsoleDebuggerRenderer;
use YapepBase\ErrorHandler\DebugErrorHandler;

/** The application root directory. */
define('APP_DIR', realpath(__DIR__));
// Include the common bootstrap
require realpath(__DIR__ . '/../../bootstrap.php');

// Include the application specific configurations
require realpath(__DIR__ . '/config.php');

$diContainer = Application::getInstance()->getDiContainer();

if (Config::getInstance()->get('application.debuggerEnabled')) {
    $debuggerRegistry = $diContainer->get('yapepBase.debuggerRegistry');
    $debuggerRegistry->addRenderer(new ConsoleDebuggerRenderer());
    $debuggerRegistry->registerEventHandler();

    $diContainer->get('yapepBase.errorHandlerRegistry')->addErrorHandler(new DebugErrorHandler($debuggerRegistry));

    unset($debuggerRegistry);
}


unset($diContainer);

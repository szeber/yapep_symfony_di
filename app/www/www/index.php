<?php
/**
 * The entry point of the application.
 */

use YapepBase\Application;
use YapepBase\Request\HttpRequest;
use YapepBase\Response\HttpResponse;
use YapepBase\Router\AutoRouter;

try {
    require_once __DIR__ . '/../bootstrap.php';

    $application     = Application::getInstance();
    $application->setRequest(new HttpRequest($_GET, $_POST, $_COOKIE, $_SERVER, $_ENV, $_FILES));
    $application->setResponse(new HttpResponse());
    $application->setRouter(new AutoRouter($application->getRequest()));

    $application->run();
} catch (\Exception $e) {
    var_dump($e);
}

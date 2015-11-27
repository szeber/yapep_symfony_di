#!/usr/bin/php
<?php

namespace Test;

use YapepBase\Application;

require __DIR__ . '/../bootstrap.php';

// Ugly global hack just for demo :)
Application::getInstance()->getDiContainer()->get('test.testScript')->run();

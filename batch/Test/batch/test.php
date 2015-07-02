#!/usr/bin/php
<?php

namespace Test;

use Test\BusinessObject\TestBo;
use YapepBase\Batch\BatchScriptAbstract;
use YapepBase\Exception\Batch\AbortException;

require __DIR__ . '/../bootstrap.php';

class Test extends BatchScriptAbstract {

    protected $testBo;

    public function __construct(TestBo $testBo)
    {
        parent::__construct();

        $this->testBo = $testBo;
    }

    /**
     * Executes the script.
     *
     * @return void
     */
    protected function execute()
    {
        echo $this->testBo->getTest() . "\n";
    }

    /**
     * This function is called, if the process receives an interrupt, term signal, etc. It can be used to clean up
     * stuff. Note, that this function is not guaranteed to run or it may run after execution.
     *
     * @return void
     */
    protected function abort()
    {
        throw new AbortException('Abort');
    }

    /**
     * Returns the script's description.
     *
     * This method should return a the description for the script. It will be used as the script description in the
     * help.
     *
     * @return string
     */
    protected function getScriptDescription()
    {
        return 'test';
    }

}

// Ugly global hack just for demo :)
(new Test($container->get('test.testBo')))->run();

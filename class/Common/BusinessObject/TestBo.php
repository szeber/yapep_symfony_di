<?php

/**
 * @package    Common
 * @subpackage BusinessObject
 */

namespace Common\BusinessObject;

use Common\Dao\TestDao;
use YapepBase\BusinessObject\BoAbstract;

/**
 * TestBo
 *
 * @package    Common
 * @subpackage BusinessObject
 */
class TestBo extends BoAbstract
{

    protected $testDao;

    public function __construct(TestDao $testDao)
    {
        $this->testDao = $testDao;
    }

    public function getTest()
    {
        return $this->testDao->getTest();
    }
}

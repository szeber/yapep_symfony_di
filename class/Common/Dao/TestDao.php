<?php

/**
 * @package    Common
 * @subpackage Dao
 */

namespace Common\Dao;

use YapepBase\Dao\DaoAbstract;

/**
 * TestDao
 *
 * @package    Common
 * @subpackage Dao
 */
class TestDao extends DaoAbstract
{

    public function getTest()
    {
        return 'test';
    }
}

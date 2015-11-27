<?php

/**
 * @package    Test
 * @subpackage BusinessObject
 */

namespace Test\BusinessObject;

use Common\Dao\TestDao;
use YapepBase\File\IFileHandler;

/**
 * TestBo
 *
 * @package    Test
 * @subpackage BusinessObject
 */
class TestBo extends \Common\BusinessObject\TestBo
{

    public function __construct(TestDao $testDao, IFileHandler $fileHandler)
    {
        parent::__construct($testDao);
        var_dump(get_class($fileHandler));
    }

}

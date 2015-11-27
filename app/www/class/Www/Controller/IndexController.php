<?php

namespace Www\Controller;

use Www\BusinessObject\TestBo;
use YapepBase\Controller\HttpController;
use YapepBase\Request\IRequest;
use YapepBase\Response\IResponse;
use YapepBase\Router\IReverseRouter;

/**
 * Class IndexController
 */
class IndexController extends HttpController
{

    protected $testBo;

    /**
     * @var IReverseRouter
     */
    protected $router;

    public function __construct(IRequest $request, IResponse $response, TestBo $testBo, IReverseRouter $router)
    {
        parent::__construct($request, $response);

        $this->testBo = $testBo;
        $this->router = $router;
    }

    public function doIndex()
    {
        return sprintf(
            '<h1>%s</h1><p><a href="%s">Test</a></p>',
            $this->testBo->getTest(),
            $this->router->getTargetForControllerAction('Index', 'Test')
        );
    }

    public function doTest() {
        return 'test page';
    }
}

<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ApplicationTest\Controller;

use Application\Controller\HelloWorldController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class HelloWorldTestController extends AbstractConsoleControllerTestCase
{
    /**
     *  Setup for HelloWorldTestController
     */
    public function setUp()
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];
        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));
        parent::setUp();
    }

    /**
     *  Test for 'IndexAction' from 'HelloWorldController'
     */
    public function testIndexActionShowHelloWorld()
    {
        $this->dispatch('hello-world');

        $this->assertModuleName('application');
        $this->assertControllerName(HelloWorldController::class);
        $this->assertControllerClass('HelloWorldController');
        $this->assertMatchedRouteName('hello-world');
        $this->assertConsoleOutputContains('Hello World');
    }
}

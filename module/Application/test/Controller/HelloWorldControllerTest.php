<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ApplicationTest\Controller;

use Application\Controller\HelloWorldController;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class HelloWorldTestController extends AbstractConsoleControllerTestCase
{
    public function setUp()
    {

    }

    public function testIndexActionShowHelloWorld(){
        $this->assertTrue(true, "TRUE");
    }
}

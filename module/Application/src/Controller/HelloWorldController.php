<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class HelloWorldController extends AbstractActionController
{
    /**
     * Index action
     *
     * @return string
     */
    public function indexAction()
    {
        return "Hello world! \n";
    }
}

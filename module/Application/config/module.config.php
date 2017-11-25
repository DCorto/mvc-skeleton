<?php

namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Returns the configuration for Application Module
 */
return [
    'console' => [
        'router' => [
            'routes' => [
                'hello-world' => [
                    'options' => [
                        'route'    => 'hello-world',
                        'defaults' => [
                            'controller' => Controller\HelloWorldController::class,
                            'action'     => 'index',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\HelloWorldController::class => InvokableFactory::class,
        ],
    ],
];

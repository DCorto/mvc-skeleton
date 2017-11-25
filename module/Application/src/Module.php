<?php

namespace Application;

class Module
{
    /**
     * Returns the config file for Application Module
     *
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}

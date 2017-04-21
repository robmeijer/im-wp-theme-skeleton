<?php

namespace IM\Bedrock;

use League\Container\Container as BaseContainer;

class Container extends BaseContainer
{
    protected static $instance;

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }
}

<?php

namespace IM\Bedrock;

abstract class MenuLocation
{
    /**
     * @return string
     */
    abstract public function location();

    /**
     * @return string
     */
    abstract public function description();
}

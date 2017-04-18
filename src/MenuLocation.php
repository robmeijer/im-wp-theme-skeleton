<?php

namespace IM\Bedrock;

abstract class MenuLocation
{
    /**
     * @var string
     */
    protected $location = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @return string
     */
    public function location()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }
}

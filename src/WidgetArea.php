<?php

namespace IM\Bedrock;

abstract class WidgetArea
{
    /**
     * @var string
     */
    protected $id = '';

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $beforeWidget = '';

    /**
     * @var string
     */
    protected $afterWidget = '';

    /**
     * @var string
     */
    protected $beforeTitle = '';

    /**
     * @var string
     */
    protected $afterTitle = '';

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function beforeWidget()
    {
        return $this->beforeWidget;
    }

    /**
     * @return string
     */
    public function afterWidget()
    {
        return $this->afterWidget;
    }

    /**
     * @return string
     */
    public function beforeTitle()
    {
        return $this->beforeTitle;
    }

    /**
     * @return string
     */
    public function afterTitle()
    {
        return $this->afterTitle;
    }
}

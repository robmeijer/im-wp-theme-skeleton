<?php

namespace IM\Bedrock;

use Timber\Timber;
use WP_Widget;

class Widget extends WP_Widget
{
    /**
     * @var Timber
     */
    protected $timber;

    /**
     * @var string
     */
    protected $idBase = '';

    /**
     * @var array
     */
    protected $widgetOptions = [];

    /**
     * @var array
     */
    protected $controlOptions = [];

    /**
     * Widget constructor.
     *
     * @internal Timber $timber
     */
    public function __construct()
    {
        global $timber;

        $this->timber = $timber;

        parent::__construct($this->idBase, $this->name, $this->widgetOptions, $this->controlOptions);
    }

    /**
     * @param string|array $view
     * @param array        $context
     */
    protected function render($view, $context)
    {
        $view = is_array($view) ? $view : [$view];

        $this->timber->render($view, $context);
    }
}

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

    public function __construct()
    {
        global $timber;

        $this->timber = $timber;

        parent::__construct($this->idBase, $this->name, $this->widgetOptions, $this->controlOptions);
    }



    protected function render($view, $context)
    {
        $this->timber->render([$view], $context);
    }
}

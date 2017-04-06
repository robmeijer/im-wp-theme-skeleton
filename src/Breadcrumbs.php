<?php

namespace IM\Bedrock;

use Timber\Timber;

abstract class Breadcrumbs
{
    /**
     * @var \Timber\Timber
     */
    protected $timber;

    public function __construct(Timber $timber)
    {
        $this->timber = $timber;
    }

    public function top()
    {
        return [
            'title' => 'Home',
            'link' => $this->timber->get_context()['site']->link(),
        ];
    }

    abstract public function items();

    abstract public function target();
}

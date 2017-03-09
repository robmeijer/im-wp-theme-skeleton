<?php

namespace IM\Bedrock\WidgetArea;

use IM\Bedrock\WidgetArea;

class CustomLinksWidgetArea extends WidgetArea
{
    /**
     * @var string
     */
    protected $id = 'custom_links';

    /**
     * @var string
     */
    protected $name = 'Custom Links';

    /**
     * @var string
     */
    protected $beforeTitle = '<h4>';

    /**
     * @var string
     */
    protected $afterTitle = '</h4>';
}

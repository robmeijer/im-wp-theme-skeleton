<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Page extends Template
{
    /**
     * @var string
     */
    protected $view = 'template/page.twig';

    protected function context()
    {
        return [
            'page' => [
                'title' => wp_title('', false),
            ]
        ];
    }
}

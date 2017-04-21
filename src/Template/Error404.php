<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Error404 extends Template
{
    /**
     * @var string
     */
    protected $view = 'template/error-404.twig';

    protected function context()
    {
        return [
            'page' => [
                'title' => wp_title('', false),
            ]
        ];
    }
}

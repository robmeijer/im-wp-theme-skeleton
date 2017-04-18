<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Archive extends Template
{
    /**
     * @var string
     */
    protected $view = 'template/archive.twig';

    protected function context()
    {
        return [
            'page' => [
                'title' => wp_title('', false),
            ]
        ];
    }
}

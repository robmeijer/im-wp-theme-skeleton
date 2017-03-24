<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Page extends Template
{
    protected $view = 'template/page.twig';

    protected function context()
    {
        $page = [
            'title' => $this->theme->timber()->get_post()->get_title(),
        ];

        $breadcrumbs = compact('page');

        return compact('breadcrumbs');
    }
}

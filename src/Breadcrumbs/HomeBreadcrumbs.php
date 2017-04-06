<?php

namespace IM\Bedrock\Breadcrumbs;

use IM\Bedrock\Breadcrumbs;

class HomeBreadcrumbs extends Breadcrumbs
{
    public function top()
    {
        return [];
    }

    public function items()
    {
        return [];
    }

    public function target()
    {
        return [
            'title' => 'Home',
        ];
    }
}

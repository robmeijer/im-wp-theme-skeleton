<?php

namespace IM\Bedrock\Breadcrumbs;

use IM\Bedrock\Breadcrumbs;

class HomeBreadcrumbs extends Breadcrumbs
{
    /**
     * @return array
     */
    public function top()
    {
        return [];
    }

    /**
     * @return array
     */
    public function items()
    {
        return [];
    }

    /**
     * @return array
     */
    public function target()
    {
        return [
            'title' => 'Home',
        ];
    }
}

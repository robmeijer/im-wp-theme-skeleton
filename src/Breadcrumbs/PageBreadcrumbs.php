<?php

namespace IM\Bedrock\Breadcrumbs;

use IM\Bedrock\Breadcrumbs;

class PageBreadcrumbs extends Breadcrumbs
{
    public function items()
    {
        $ancestorId = $this->timber->get_post()->post_parent();

        $items = [];
        while ($ancestorId !== 0) {
            $ancestor = $this->timber->get_post($ancestorId);
            array_unshift($items, $ancestor);
            $ancestorId = $ancestor->post_parent();
        }

        return $items;
    }

    public function target()
    {
        return [
            'title' => $this->timber->get_post()->get_title(),
        ];
    }
}

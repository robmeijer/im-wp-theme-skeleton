<?php

namespace IM\Bedrock\Breadcrumbs;

use IM\Bedrock\Breadcrumbs;

class SingleBreadcrumbs extends Breadcrumbs
{
    public function items()
    {
        $ancestorId = $this->timber->get_post()->category()->id();

        $items = [];
        while ($ancestorId !== 0) {
            $ancestor = $this->timber->get_term($ancestorId, 'category');
            array_unshift($items, $ancestor);
            $ancestorId = $ancestor->parent();
        }

        return $items;
    }

    public function target()
    {
        return [
            'title' => $this->timber->get_post()->title(),
        ];
    }
}

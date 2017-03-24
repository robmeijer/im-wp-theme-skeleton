<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Single extends Template
{
    protected $view = 'template/single.twig';

    protected function context()
    {
        $post = $this->theme->timber()->get_post();
        $ancestorId = $post->category()->id();

        $ancestors = [];
        while ($ancestorId !== 0) {
            $ancestor = $this->theme->timber()->get_term($ancestorId, 'category');
            array_unshift($ancestors, $ancestor);
            $ancestorId = $ancestor->parent();
        }

        $breadcrumbs = compact('post', 'ancestors');

        return compact('breadcrumbs');
    }
}

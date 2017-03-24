<?php

namespace IM\Bedrock\Template;

use IM\Bedrock\Template;

class Archive extends Template
{
    protected $view = 'template/archive.twig';

    protected function context()
    {
        $breadcrumbs = [];
        switch (true) {
            case is_category():
                $category = get_queried_object();
                $ancestorId = $category->parent;

                $ancestors = [];
                while ($ancestorId !== 0) {
                    $ancestor = $this->theme->timber()->get_term($ancestorId, 'category');
                    array_unshift($ancestors, $ancestor);
                    $ancestorId = $ancestor->parent();
                }

                $breadcrumbs = compact('category', 'ancestors');
                break;

            case is_date():
                $year = [
                    'link' => get_year_link(get_the_time('Y')),
                    'name' => get_the_time('Y'),
                ];

                $month = [
                    'link' => get_month_link(get_the_time('Y'), get_the_time('m')),
                    'name' => get_the_time('F'),
                ];

                $day = [
                    'name' => get_the_time('d'),
                ];

                $breadcrumbs = compact('year', 'month', 'day');
                break;

            case is_author():
                $author = get_queried_object();

                $breadcrumbs = compact('author');
                break;
        }

        return compact('breadcrumbs');
    }
}

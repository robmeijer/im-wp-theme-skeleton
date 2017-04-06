<?php

namespace IM\Bedrock\Breadcrumbs;

use IM\Bedrock\Breadcrumbs;
use Timber\Timber;

class ArchiveBreadcrumbs extends Breadcrumbs
{
    protected $term;

    public function __construct(Timber $timber, $term)
    {
        parent::__construct($timber);
        $this->term = $term;
    }

    public function items()
    {
        $items = [];

        if (is_date()) {
            if (is_day() || is_month()) {
                $year = [
                    'link' => get_year_link(get_the_time('Y')),
                    'name' => get_the_time('Y'),
                ];

                $month = [
                    'link' => get_month_link(get_the_time('Y'), get_the_time('m')),
                    'name' => get_the_time('F'),
                ];
                if (is_day()) {
                    array_unshift($items, $month);
                }
                array_unshift($items, $year);
            }
        } elseif ($ancestorId = $this->term->parent) {
            while ($ancestorId !== 0) {
                $ancestor = $this->timber->get_term($ancestorId);
                array_unshift($items, $ancestor);
                $ancestorId = $ancestor->parent();
            }
        };

        return $items;
    }

    public function target()
    {
        return [
            'title' => $this->targetTitle(),
        ];
    }

    private function targetTitle()
    {
        if (is_date()) {
            return $this->getDateTargetTitle();
        }

        return $this->term->name ?: $this->term->display_name ?: 'No Title';
    }

    private function getDateTargetTitle()
    {
        if (is_day()) {
            return get_the_time('d');
        }

        if (is_month()) {
            return get_the_time('F');
        }

        return get_the_time('Y');
    }
}

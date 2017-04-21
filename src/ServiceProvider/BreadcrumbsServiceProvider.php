<?php

namespace IM\Bedrock\ServiceProvider;

use IM\Bedrock\Breadcrumbs\ArchiveBreadcrumbs;
use IM\Bedrock\Breadcrumbs\HomeBreadcrumbs;
use IM\Bedrock\Breadcrumbs\PageBreadcrumbs;
use IM\Bedrock\Breadcrumbs\SingleBreadcrumbs;
use League\Container\ServiceProvider\AbstractServiceProvider;

class BreadcrumbsServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'breadcrumbs.archive',
        'breadcrumbs.home',
        'breadcrumbs.page',
        'breadcrumbs.single',
    ];

    public function register()
    {
        $this->getContainer()->add('breadcrumbs.archive', function () {
            $term = get_queried_object();
            return new ArchiveBreadcrumbs($this->getContainer()->get('timber'), $term);
        });

        $this->getContainer()->add('breadcrumbs.home', function () {
            return new HomeBreadcrumbs($this->getContainer()->get('timber'));
        });

        $this->getContainer()->add('breadcrumbs.page', function () {
            return new PageBreadcrumbs($this->getContainer()->get('timber'));
        });

        $this->getContainer()->add('breadcrumbs.single', function () {
            return new SingleBreadcrumbs($this->getContainer()->get('timber'));
        });
    }
}

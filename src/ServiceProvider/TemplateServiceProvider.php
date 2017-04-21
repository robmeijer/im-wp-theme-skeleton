<?php

namespace IM\Bedrock\ServiceProvider;

use IM\Bedrock\Template\Archive;
use IM\Bedrock\Template\Error404;
use IM\Bedrock\Template\Home;
use IM\Bedrock\Template\Index;
use IM\Bedrock\Template\Page;
use IM\Bedrock\Template\Single;
use League\Container\ServiceProvider\AbstractServiceProvider;

class TemplateServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'template.archive',
        'template.home',
        'template.page',
        'template.single',
        'template.error.404',
        'template.search',
    ];

    public function register()
    {
        $this->getContainer()->share('template.archive', function () {
            return new Archive(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.archive')
            );
        });

        $this->getContainer()->share('template.home', function () {
            return new Home(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.home')
            );
        });

        $this->getContainer()->share('template.page', function () {
            return new Page(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.page')
            );
        });

        $this->getContainer()->share('template.single', function () {
            return new Single(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.single')
            );
        });

        $this->getContainer()->share('template.error.404', function () {
            return new Error404(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.home')
            );
        });

        $this->getContainer()->share('template.search', function () {
            return new Index(
                $this->getContainer()->get('timber'),
                $this->getContainer()->get('breadcrumbs.home')
            );
        });
    }
}

<?php

use IM\Bedrock\Container;
use IM\Bedrock\ServiceProvider;

require_once __DIR__ . '/vendor/autoload.php';

fabric()->addServiceProvider(ServiceProvider\TimberServiceProvider::class);
fabric()->addServiceProvider(ServiceProvider\ThemeServiceProvider::class);
fabric()->addServiceProvider(ServiceProvider\BreadcrumbsServiceProvider::class);
fabric()->addServiceProvider(ServiceProvider\TemplateServiceProvider::class);

function fabric($alias = null)
{
    $container = Container::getInstance();

    return $alias ? $container->get($alias) : $container;
}

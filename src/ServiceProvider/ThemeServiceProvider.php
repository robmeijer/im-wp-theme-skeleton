<?php

namespace IM\Bedrock\ServiceProvider;

use IM\Bedrock\Theme;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ThemeServiceProvider extends AbstractServiceProvider
{
    const alias = 'theme';

    protected $provides = [
        self::alias,
    ];

    public function register()
    {
        $this->getContainer()->share(self::alias, function () {
            return new Theme();
        });
    }
}

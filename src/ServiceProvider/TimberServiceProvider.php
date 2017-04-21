<?php

namespace IM\Bedrock\ServiceProvider;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Timber\Timber;

class TimberServiceProvider extends AbstractServiceProvider
{
    const alias = 'timber';

    protected $provides = [
        self::alias,
    ];

    public function register()
    {
        $this->getContainer()->share(self::alias, function () {
            return new Timber();
        });
    }
}

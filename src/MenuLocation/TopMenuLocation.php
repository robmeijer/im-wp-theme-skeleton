<?php

namespace IM\Bedrock\MenuLocation;

use IM\Bedrock\MenuLocation;

class TopMenuLocation extends MenuLocation
{
    /**
     * @return string
     */
    public function location()
    {
        return 'top_menu';
    }

    /**
     * @return string
     */
    public function description()
    {
        return 'Top Menu';
    }
}

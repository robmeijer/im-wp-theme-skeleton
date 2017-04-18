<?php

namespace IM\Bedrock;

use IM\Bedrock\MenuLocation\FooterMenuLocation;
use IM\Bedrock\MenuLocation\TopMenuLocation;
use IM\Bedrock\Widget\AboutWidget;
use IM\Bedrock\WidgetArea\CustomLinksWidgetArea;

class Theme extends BaseTheme
{
    public function registerWidgets()
    {
        $this->registerWidget(new AboutWidget());
    }

    public function registerWidgetAreas()
    {
        $this->registerWidgetArea(new CustomLinksWidgetArea());
    }

    public function registerMenuLocations()
    {
        $this->registerMenuLocation(new TopMenuLocation());
        $this->registerMenuLocation(new FooterMenuLocation());
    }
}

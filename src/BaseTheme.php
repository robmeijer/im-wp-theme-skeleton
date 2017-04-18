<?php

namespace IM\Bedrock;

use IM\Bedrock\MenuLocation\FooterMenuLocation;
use IM\Bedrock\MenuLocation\TopMenuLocation;
use IM\Bedrock\Widget\AboutWidget;
use IM\Bedrock\WidgetArea\CustomLinksWidgetArea;
use Timber\Site;

abstract class BaseTheme extends Site
{
    abstract public function registerWidgets();

    abstract public function registerWidgetAreas();

    abstract public function registerMenuLocations();

    protected function init()
    {
        parent::init();

        add_action('after_setup_theme', [$this, 'registerMenuLocations']);
        add_action('wp_loaded', [$this, 'registerWidgetAreas']);
        add_action('widgets_init', [$this, 'registerWidgets']);
    }

    protected function registerWidgetArea(WidgetArea $area)
    {
        register_sidebar([
            'id'   => $area->id(),
            'name' => $area->name(),
            'before_widget' => $area->beforeWidget(),
            'after_widget'  => $area->afterWidget(),
            'before_title'  => $area->beforeTitle(),
            'after_title'   => $area->afterTitle(),
        ]);
    }

    protected function registerWidget(Widget $widget)
    {
        register_widget(get_class($widget));
    }

    protected function registerMenuLocation(MenuLocation $menuLocation)
    {
        register_nav_menu(
            $menuLocation->location(),
            $menuLocation->description()
        );
    }
}

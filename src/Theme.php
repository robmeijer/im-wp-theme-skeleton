<?php

namespace IM\Bedrock;

use IM\Bedrock\MenuLocation\FooterMenuLocation;
use IM\Bedrock\MenuLocation\TopMenuLocation;
use IM\Bedrock\Widget\AboutWidget;
use IM\Bedrock\WidgetArea\CustomLinksWidgetArea;
use Timber\Site;
use Timber\Timber;

class Theme extends Site
{
    /**
     * @var Timber
     */
    protected $timber;

    public function __construct(Timber $timber)
    {
        parent::__construct();

        $this->timber = $timber;
    }

    /**
     * @return Timber
     */
    public function timber()
    {
        return $this->timber;
    }

    public function registerWidgets()
    {
        $this->registerWidget(AboutWidget::class);
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

    protected function registerWidget($class)
    {
        register_widget($class);
    }

    protected function registerMenuLocation(MenuLocation $menuLocation)
    {
        register_nav_menu(
            $menuLocation->location(),
            $menuLocation->description()
        );
    }
}

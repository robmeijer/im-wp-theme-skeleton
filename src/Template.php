<?php

namespace IM\Bedrock;

use Timber\Menu;

class Template
{
    /**
     * @var Theme
     */
    protected $theme;

    /**
     * @var string
     */
    protected $view;

    /**
     * Template constructor.
     *
     * @param Theme $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function render()
    {
        $context = array_merge(
            $this->theme->timber()->get_context(),
            $this->defaultContext(),
            $this->context()
        );

        $this->theme->timber()->render([$this->view], $context);
    }

    protected function defaultContext()
    {
        return [
            'pagination' => $this->theme->timber()->get_pagination(),
            'menu' => $this->buildMenus(),
        ];
    }

    protected function context()
    {
        return [];
    }

    protected function buildMenus()
    {
        $menus = [];

        foreach (get_nav_menu_locations() as $location => $menu) {
            if ($menu !== 0) {
                $menus[$location] = new Menu($menu);
            }
        }

        return $menus;
    }
}

<?php

namespace IM\Bedrock;

use Timber\Menu;
use Timber\Timber;

abstract class Template
{
    /**
     * @var string
     */
    protected $view;

    /**
     * @var Breadcrumbs
     */
    protected $breadcrumbs;

    /**
     * @var \Timber\Timber
     */
    protected $timber;

    /**
     * Template constructor.
     *
     * @param Timber $timber
     * @param Breadcrumbs $breadcrumbs
     */
    public function __construct(Timber $timber, Breadcrumbs $breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
        $this->timber = $timber;
    }

    /**
     * Render the template.
     */
    public function render()
    {
        $this->timber->render(
            [$this->view()],
            array_merge(
                $this->timber->get_context(),
                $this->defaultContext(),
                $this->context()
            )
        );
    }

    /**
     * The view for the given template.
     *
     * @return string
     */
    public function view()
    {
        return $this->view;
    }

    /**
     * The default context loaded for all templates.
     *
     * @return array
     */
    protected function defaultContext()
    {
        return [
            'pagination' => $this->timber->get_pagination(),
            'menu' => $this->menus(),
            'breadcrumbs' => $this->breadcrumbs(),
        ];
    }

    /**
     * The template specific context.
     *
     * @return array
     */
    protected function context()
    {
        return [];
    }

    /**
     * Build all navigation menus.
     *
     * @return array
     */
    protected function menus()
    {
        $menus = [];

        foreach (get_nav_menu_locations() as $location => $menu) {
            if ($menu !== 0) {
                $menus[$location] = new Menu($menu);
            }
        }

        return $menus;
    }

    /**
     * @return \IM\Bedrock\Breadcrumbs
     */
    protected function breadcrumbs()
    {
        return $this->breadcrumbs;
    }
}

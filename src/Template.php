<?php

namespace IM\Bedrock;

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
        ];
    }

    protected function context()
    {
        return [];
    }
}

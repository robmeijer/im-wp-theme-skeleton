<?php

namespace IM\Bedrock\Widget;

use IM\Bedrock\Widget;

class AboutWidget extends Widget
{
    /**
     * @var string
     */
    public $name = 'About Widget';

    /**
     * @var string
     */
    protected $idBase = 'about_widget';

    /**
     * @var array
     */
    protected $widgetOptions = [
        'description' => 'Displays the About section.'
    ];

    /**
     * @param array $instance
     * @return string
     */
    public function form($instance)
    {
        $this->render('widget/about-widget/form.twig', compact('instance'));
    }

    /**
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        $this->render('widget/about-widget.twig', compact('args', 'instance'));
    }
}

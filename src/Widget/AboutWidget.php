<?php

namespace IM\Bedrock\Widget;

use IM\Bedrock\Widget;

class AboutWidget extends Widget
{
    public $idBase = 'about_widget';

    public $name = 'About Widget';

    public $widgetOptions = [
        'description' => 'Displays the About section.'
    ];

    public $controlOptions = [];

    public function widget($args, $instance)
    {
        $this->render('widget/about-widget.twig', [
            'args' => $args,
            'instance' => $instance,
        ]);
    }
}

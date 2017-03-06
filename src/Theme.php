<?php

namespace IM\Bedrock;

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

    public function widgetsInit()
    {
        register_sidebar([
            'name' => 'Custom Links',
            'id' => 'custom_links',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ]);
    }

    protected function init()
    {
        add_action('widgets_init', [$this, 'widgetsInit']);
    }
}

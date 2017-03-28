<?php
/**
 * Created by PhpStorm.
 * User: meijerw6
 * Date: 28/03/2017
 * Time: 16:38
 */

namespace IM\Bedrock\MenuLocation;


use IM\Bedrock\MenuLocation;

class FooterMenuLocation extends MenuLocation
{
    /**
     * @return string
     */
    public function location()
    {
        return 'footer_menu';
    }

    /**
     * @return string
     */
    public function description()
    {
        return 'Footer Menu';
    }
}

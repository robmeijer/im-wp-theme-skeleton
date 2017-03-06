<?php

switch (true) {
    case is_home():
        $template = new IM\Bedrock\Template\Home($theme);
        break;
    case is_archive():
        $template = new IM\Bedrock\Template\Archive($theme);
        break;
    case is_page():
        $template = new IM\Bedrock\Template\Page($theme);
        break;
    case is_single():
        $template = new IM\Bedrock\Template\Single($theme);
        break;
    case is_404():
        $template = new IM\Bedrock\Template\Error404($theme);
        break;
    case is_search():
    default:
        $template = new IM\Bedrock\Template\Index($theme);
        break;
}

$template->render();

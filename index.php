<?php

switch (true) {
    case is_home():
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\HomeBreadcrumbs($timber);
        $template = new IM\Bedrock\Template\Home($timber, $breadcrumbs);
        break;
    case is_archive():
        $term = get_queried_object();
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\ArchiveBreadcrumbs($timber, $term);
        $template = new IM\Bedrock\Template\Archive($timber, $breadcrumbs);
        break;
    case is_page():
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\PageBreadcrumbs($timber);
        $template = new IM\Bedrock\Template\Page($timber, $breadcrumbs);
        break;
    case is_single():
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\SingleBreadcrumbs($timber);
        $template = new IM\Bedrock\Template\Single($timber, $breadcrumbs);
        break;
    case is_404():
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\HomeBreadcrumbs($timber);
        $template = new IM\Bedrock\Template\Error404($timber, $breadcrumbs);
        break;
    case is_search():
    default:
        $breadcrumbs = new \IM\Bedrock\Breadcrumbs\HomeBreadcrumbs($timber);
        $template = new IM\Bedrock\Template\Index($timber, $breadcrumbs);
        break;
}

$template->render();

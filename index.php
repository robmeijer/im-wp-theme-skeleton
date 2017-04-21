<?php

switch (true) {
    case is_home():
        $template = fabric('template.home');
        break;
    case is_archive():
        $template = fabric('template.archive');
        break;
    case is_page():
        $template = fabric('template.page');
        break;
    case is_single():
        $template = fabric('template.single');
        break;
    case is_404():
        $template = fabric('template.error.404');
        break;
    case is_search():
    default:
        $template = fabric('template.search');
        break;
}

$template->render();

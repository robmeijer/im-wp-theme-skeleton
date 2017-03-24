<?php

use IM\Bedrock\Theme;

require_once __DIR__ . '/vendor/autoload.php';

$timber = new Timber\Timber();
$theme = new Theme($timber);

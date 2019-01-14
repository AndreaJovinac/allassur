<?php

require './core/PageLoader.php';

use \core\PageLoader;

$pageLoader = new PageLoader();
echo $pageLoader->getPageContent();

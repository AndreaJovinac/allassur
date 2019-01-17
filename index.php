<?php

require './core/PageLoader.php';
require './core/Controller.php';

use \core\PageLoader;
use \core\Controller;

$pageLoader = new PageLoader();
//$pageLoader->getPageContent();
$ctrl = new Controller();
require( __DIR__.'/public/template/base.html.php');
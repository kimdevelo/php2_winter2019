<?php

// Start output buffering.
ob_start();

include 'vendor/autoload.php';

require 'src/Model/DataStorage.php';
require 'src/View/TemplateManager.php';
require 'src/Controller/IndexController.php';

// need routing
include 'src/Router.php';

$app = new \Application\Router();

$app = new \Application\Controller\IndexController();

$app->indexAction();

ob_end_flush();
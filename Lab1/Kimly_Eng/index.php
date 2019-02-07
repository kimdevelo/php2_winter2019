<?php
// INDEX - is a front controller

//4. Creating index.php and the followings:
//require 'TemplateManager.php';

//$app = new TemplateManager();

//$app->loadTemplate();

//$app->render();

//=================================

require 'IndexController.php'; // autoloading

// routing

// Call the method to view the each webpage
$app = new IndexController();

$app->indexAction();
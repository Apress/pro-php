<?php

//Require Components
require_once('../application/models/front.php');
require_once('../application/models/icontroller.php');
require_once('../application/models/view.php');

//Require Controllers
require_once('../application/controllers/index.php');

//Initialize the FrontController
$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
<?php

class index implements IController {
  public function index() {
    $fc = FrontController::getInstance();

    $params = $fc->getParams();

    $view = new View();
    $view->name = $params['name'];
    $result = $view->render('../views/index.php');

    $fc->setBody($result);
  }
}
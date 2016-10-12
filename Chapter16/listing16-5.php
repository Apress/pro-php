<?php
class ErrorController extends Zend_Controller_Action {

  public function errorAction() {
    $request = $this->getRequest();
    $errorHandler = $request->getParam('error_handler');

    Zend_Debug::dump($errorHandler);
  }
}

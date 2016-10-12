class ErrorController extends Zend_Controller_Action {
  public function errorAction() {
    $request = $this->getRequest();
    $errorHandler = $request->getParam('error_handler');

    //Get the log instance
    $log = Zend_Registry::get('log');

    //Log an emergency message with the encountered exception
    $log->emerg($errorHandler['exception']->__toString());
  }
}
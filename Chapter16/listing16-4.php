$view = new Zend_View();
$view->siteWideProperty = 'value';
$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
$viewRenderer->setView($view);

$router = new Zend_Controller_Router_Rewrite();
$front = Zend_Controller_Front::getInstance();
$front->setRouter($router);
$front->run(APP_PATH . '/application/controllers');
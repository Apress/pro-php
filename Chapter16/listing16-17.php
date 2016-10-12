public function OneAction() {
  $session = new Zend_Session_Namespace('AUniqueNamespace');
  $session->setExpirationHops(1);
  $session->key = 'value';

  $this->getHelper('redirector')->goto('two');
}

public function TwoAction() {
  $session = new Zend_Session_Namespace('AUniqueNamespace');
  $this->view->key = $session->key;
}
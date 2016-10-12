public function redirectAction() {
  $this->getHelper('FlashMessenger')
       ->addMessage("This was set at the redirector");

  $this->getHelper('redirector')->goto('show');
}

public function showAction() {
  $this->view->messages = $this->getHelper('FlashMessenger')->getMessages();
}